<?php

namespace App\Entity;

use App\Repository\BuildingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BuildingRepository::class)
 */
class Building
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\ManyToOne(targetEntity=BuildingType::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private ?BuildingType $buildingType;

    /**
     * @ORM\Column(type="smallint")
     */
    private ?int $life = 10;

    /**
     * @ORM\ManyToOne(targetEntity=Region::class, inversedBy="buildings")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Region $region;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBuildingType(): ?BuildingType
    {
        return $this->buildingType;
    }

    public function setBuildingType(?BuildingType $buildingType): self
    {
        $this->buildingType = $buildingType;

        return $this;
    }

    public function getLife(): ?int
    {
        return $this->life;
    }

    public function setLife(int $life): self
    {
        $this->life = $life;

        return $this;
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
}
