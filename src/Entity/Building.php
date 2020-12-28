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

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $ironStock = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $petrolStock = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $uraniumStock = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $goldStock = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $sandStock = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $steelStock = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $coalStock = 0;

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

    public function getIronStock(): ?int
    {
        return $this->ironStock;
    }

    public function setIronStock(int $ironStock): self
    {
        $this->ironStock = $ironStock;

        return $this;
    }

    public function getPetrolStock(): ?int
    {
        return $this->petrolStock;
    }

    public function setPetrolStock(int $petrolStock): self
    {
        $this->petrolStock = $petrolStock;

        return $this;
    }

    public function getUraniumStock(): ?int
    {
        return $this->uraniumStock;
    }

    public function setUraniumStock(int $uraniumStock): self
    {
        $this->uraniumStock = $uraniumStock;

        return $this;
    }

    public function getGoldStock(): ?int
    {
        return $this->goldStock;
    }

    public function setGoldStock(int $goldStock): self
    {
        $this->goldStock = $goldStock;

        return $this;
    }

    public function getSandStock(): ?int
    {
        return $this->sandStock;
    }

    public function setSandStock(int $sandStock): self
    {
        $this->sandStock = $sandStock;

        return $this;
    }

    public function getSteelStock(): ?int
    {
        return $this->steelStock;
    }

    public function setSteelStock(int $steelStock): self
    {
        $this->steelStock = $steelStock;

        return $this;
    }

    public function getCoalStock(): ?int
    {
        return $this->coalStock;
    }

    public function setCoalStock(int $coalStock): self
    {
        $this->coalStock = $coalStock;

        return $this;
    }
}
