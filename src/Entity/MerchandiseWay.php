<?php

namespace App\Entity;

use App\Repository\MerchandiseWayRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MerchandiseWayRepository::class)
 */
class MerchandiseWay
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\ManyToOne(targetEntity=Region::class, inversedBy="startMerchandiseWays")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Region $start;

    /**
     * @ORM\ManyToOne(targetEntity=Region::class, inversedBy="endMerchandiseWays")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Region $end;

    /**
     * @ORM\Column(type="json")
     */
    private array $currentFlow = [];

    /**
     * @ORM\Column(type="json")
     */
    private array $path = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStart(): ?Region
    {
        return $this->start;
    }

    public function setStart(?Region $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?Region
    {
        return $this->end;
    }

    public function setEnd(?Region $end): self
    {
        $this->end = $end;

        return $this;
    }

    public function getCurrentFlow(): ?array
    {
        return $this->currentFlow;
    }

    public function setCurrentFlow(array $currentFlow): self
    {
        $this->currentFlow = $currentFlow;

        return $this;
    }

    public function getPath(): ?array
    {
        return $this->path;
    }

    public function setPath(array $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function __toString(): string
    {
        return $this->getStart()->__toString()." - ".$this->getEnd()->__toString();
    }
}
