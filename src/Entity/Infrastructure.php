<?php

namespace App\Entity;

use App\Repository\InfrastructureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InfrastructureRepository::class)
 */
class Infrastructure
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\ManyToOne(targetEntity=Region::class, inversedBy="infrastructures")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Region $region;

    /**
     * @ORM\ManyToOne(targetEntity=InfrastructureType::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private ?InfrastructureType $infrastructureType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegion(): ?Region
    {
        return $this->region;
    }

    public function setRegion(?Region $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getInfrastructureType(): ?InfrastructureType
    {
        return $this->infrastructureType;
    }

    public function setInfrastructureType(?InfrastructureType $infrastructureType): self
    {
        $this->infrastructureType = $infrastructureType;

        return $this;
    }
}
