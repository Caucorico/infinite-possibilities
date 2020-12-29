<?php

namespace App\Entity;

use App\Repository\InfrastructureTypeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InfrastructureTypeRepository::class)
 */
class InfrastructureType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="json")
     */
    private array $flow = [];

    /**
     * @ORM\Column(type="json")
     */
    private array $consumption = [];

    /**
     * @ORM\Column(type="json")
     */
    private array $cost = [];

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFlow(): ?array
    {
        return $this->flow;
    }

    public function setFlow(array $flow): self
    {
        $this->flow = $flow;

        return $this;
    }

    public function getConsumption(): ?array
    {
        return $this->consumption;
    }

    public function setConsumption(array $consumption): self
    {
        $this->consumption = $consumption;

        return $this;
    }

    public function getCost(): ?array
    {
        return $this->cost;
    }

    public function setCost(array $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function __toString(): string
    {
        return $this->getName();
    }
}
