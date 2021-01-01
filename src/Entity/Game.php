<?php

namespace App\Entity;

use App\Repository\GameRepository;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GameRepository::class)
 */
class Game
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?DateTimeInterface $startDate;

    /**
     * @ORM\OneToMany(targetEntity=Region::class, mappedBy="game", orphanRemoval=true, cascade={"persist"})
     */
    private Collection $regions;

    /**
     * @ORM\Column(type="smallint")
     */
    private ?int $size;

    /**
     * @ORM\OneToMany(targetEntity=Player::class, mappedBy="game", orphanRemoval=true)
     */
    private Collection $players;

    /**
     * @ORM\ManyToMany(targetEntity=RessourceType::class)
     */
    private Collection $ressources;

    public function __construct()
    {
        $this->regions = new ArrayCollection();
        $this->players = new ArrayCollection();
        $this->ressources = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDate(): ?DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return Collection|Region[]
     */
    public function getRegions(): Collection
    {
        return $this->regions;
    }

    public function addRegion(Region $region): self
    {
        if (!$this->regions->contains($region)) {
            $this->regions[] = $region;
            $region->setGame($this);
        }

        return $this;
    }

    public function removeRegion(Region $region): self
    {
        if ($this->regions->removeElement($region)) {
            // set the owning side to null (unless already changed)
            if ($region->getGame() === $this) {
                $region->setGame(null);
            }
        }

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return Collection|Player[]
     */
    public function getPlayers(): Collection
    {
        return $this->players;
    }

    public function addPlayer(Player $player): self
    {
        if (!$this->players->contains($player)) {
            $this->players[] = $player;
            $player->setGame($this);
        }

        return $this;
    }

    public function removePlayer(Player $player): self
    {
        if ($this->players->removeElement($player)) {
            // set the owning side to null (unless already changed)
            if ($player->getGame() === $this) {
                $player->setGame(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|RessourceType[]
     */
    public function getRessources(): Collection
    {
        return $this->ressources;
    }

    public function addRessource(RessourceType $ressource): self
    {
        if (!$this->ressources->contains($ressource)) {
            $this->ressources[] = $ressource;
        }

        return $this;
    }

    public function removeRessource(RessourceType $ressource): self
    {
        $this->ressources->removeElement($ressource);

        return $this;
    }
}
