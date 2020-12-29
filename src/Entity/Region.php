<?php

namespace App\Entity;

use App\Repository\RegionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RegionRepository::class)
 */
class Region
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="smallint")
     */
    private ?int $x;

    /**
     * @ORM\Column(type="smallint")
     */
    private ?int $y;

    /**
     * @ORM\Column(type="smallint")
     */
    private ?int $biome;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $iron = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $petrol = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $uranium = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $gold = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $sand = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $coal = 0;

    /**
     * @ORM\ManyToOne(targetEntity=Game::class, inversedBy="regions")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Game $game;

    /**
     * @ORM\OneToMany(targetEntity=Building::class, mappedBy="region", orphanRemoval=true, cascade={"PERSIST"})
     */
    private Collection $buildings;

    /**
     * @ORM\ManyToOne(targetEntity=Player::class, inversedBy="regions")
     */
    private ?Player $player;

    /**
     * @ORM\OneToMany(targetEntity=Infrastructure::class, mappedBy="region", orphanRemoval=true, cascade={"PERSIST"})
     */
    private Collection $infrastructures;

    /**
     * @ORM\OneToMany(targetEntity=MerchandiseWay::class, mappedBy="start", orphanRemoval=true)
     */
    private Collection $startMerchandiseWays;

    /**
     * @ORM\OneToMany(targetEntity=MerchandiseWay::class, mappedBy="end", orphanRemoval=true)
     */
    private Collection $endMerchandiseWays;

    public function __construct()
    {
        $this->buildings = new ArrayCollection();
        $this->infrastructures = new ArrayCollection();
        $this->startMerchandiseWays = new ArrayCollection();
        $this->endMerchandiseWays = new ArrayCollection();
    }

    public const OCEAN_BIOME = 0;
    public const PLAIN_BIOME = 1;
    public const FOREST_BIOME = 2;
    public const JUNGLE_BIOME = 3;
    public const DESERT_BIOME = 4;
    public const MONTAIN_BIOME = 5;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getX(): ?int
    {
        return $this->x;
    }

    public function setX(int $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?int
    {
        return $this->y;
    }

    public function setY(int $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getBiome(): ?int
    {
        return $this->biome;
    }

    public function setBiome(int $biome): self
    {
        $this->biome = $biome;

        return $this;
    }

    public function getIron(): ?int
    {
        return $this->iron;
    }

    public function setIron(int $iron): self
    {
        $this->iron = $iron;

        return $this;
    }

    public function getPetrol(): ?int
    {
        return $this->petrol;
    }

    public function setPetrol(int $petrol): self
    {
        $this->petrol = $petrol;

        return $this;
    }

    public function getUranium(): ?int
    {
        return $this->uranium;
    }

    public function setUranium(int $uranium): self
    {
        $this->uranium = $uranium;

        return $this;
    }

    public function getGold(): ?int
    {
        return $this->gold;
    }

    public function setGold(int $gold): self
    {
        $this->gold = $gold;

        return $this;
    }

    public function getSand(): ?int
    {
        return $this->sand;
    }

    public function setSand(int $sand): self
    {
        $this->sand = $sand;

        return $this;
    }

    public function getCoal(): ?int
    {
        return $this->coal;
    }

    public function setCoal(int $coal): self
    {
        $this->coal = $coal;

        return $this;
    }

    public function getGame(): ?Game
    {
        return $this->game;
    }

    public function setGame(?Game $game): self
    {
        $this->game = $game;

        return $this;
    }

    /**
     * @return Collection|Building[]
     */
    public function getBuildings(): Collection
    {
        return $this->buildings;
    }

    public function addBuilding(Building $building): self
    {
        if (!$this->buildings->contains($building)) {
            $this->buildings[] = $building;
            $building->setRegion($this);
        }

        return $this;
    }

    public function removeBuilding(Building $building): self
    {
        if ($this->buildings->removeElement($building)) {
            // set the owning side to null (unless already changed)
            if ($building->getRegion() === $this) {
                $building->setRegion(null);
            }
        }

        return $this;
    }

    public function getPlayer(): ?Player
    {
        return $this->player;
    }

    public function setPlayer(?Player $player): self
    {
        $this->player = $player;

        return $this;
    }

    /**
     * @return Collection|Infrastructure[]
     */
    public function getInfrastructures(): Collection
    {
        return $this->infrastructures;
    }

    public function addInfrastructure(Infrastructure $infrastructure): self
    {
        if (!$this->infrastructures->contains($infrastructure)) {
            $this->infrastructures[] = $infrastructure;
            $infrastructure->setRegion($this);
        }

        return $this;
    }

    public function removeInfrastructure(Infrastructure $infrastructure): self
    {
        if ($this->infrastructures->removeElement($infrastructure)) {
            // set the owning side to null (unless already changed)
            if ($infrastructure->getRegion() === $this) {
                $infrastructure->setRegion(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MerchandiseWay[]
     */
    public function getStartMerchandiseWays(): Collection
    {
        return $this->startMerchandiseWays;
    }

    public function addStartMerchandiseWay(MerchandiseWay $startMerchandiseWay): self
    {
        if (!$this->startMerchandiseWays->contains($startMerchandiseWay)) {
            $this->startMerchandiseWays[] = $startMerchandiseWay;
            $startMerchandiseWay->setStart($this);
        }

        return $this;
    }

    public function removeStartMerchandiseWay(MerchandiseWay $startMerchandiseWay): self
    {
        if ($this->startMerchandiseWays->removeElement($startMerchandiseWay)) {
            // set the owning side to null (unless already changed)
            if ($startMerchandiseWay->getStart() === $this) {
                $startMerchandiseWay->setStart(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MerchandiseWay[]
     */
    public function getEndMerchandiseWays(): Collection
    {
        return $this->endMerchandiseWays;
    }

    public function addEndMerchandiseWay(MerchandiseWay $endMerchandiseWay): self
    {
        if (!$this->endMerchandiseWays->contains($endMerchandiseWay)) {
            $this->endMerchandiseWays[] = $endMerchandiseWay;
            $endMerchandiseWay->setEnd($this);
        }

        return $this;
    }

    public function removeEndMerchandiseWay(MerchandiseWay $endMerchandiseWay): self
    {
        if ($this->endMerchandiseWays->removeElement($endMerchandiseWay)) {
            // set the owning side to null (unless already changed)
            if ($endMerchandiseWay->getEnd() === $this) {
                $endMerchandiseWay->setEnd(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return "Sector ".$this->getX()."-".$this->getY();
    }
}
