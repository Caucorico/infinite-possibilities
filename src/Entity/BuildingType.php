<?php

namespace App\Entity;

use App\Repository\BuildingTypeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BuildingTypeRepository::class)
 */
class BuildingType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $name;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $ironProduction;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $petrolProduction;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $uraniumProduction;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $moneyProduction;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $goldProduction;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $sandProduction;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $steelProduction;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $coalProduction;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $ironConsumption;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $petrolConsumption;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $uraniumConsumption;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $goldConsumption;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $sandConsumption;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $steelConsumption;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $coalConsumption;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $moneyConsumption;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $moneyCost;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $ironCost;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $petrolCost;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $uraniumCost;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $goldCost;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $sandCost;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $steelCost;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $coalCost;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $ironCapacity;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $petrolCapacity;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $uraniumCapacity;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $goldCapacity;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $sandCapacity;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $steelCapacity;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $coalCapacity;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $totalCapacity;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIronProduction(): ?int
    {
        return $this->ironProduction;
    }

    public function setIronProduction(int $ironProduction): self
    {
        $this->ironProduction = $ironProduction;

        return $this;
    }

    public function getPetrolProduction(): ?int
    {
        return $this->petrolProduction;
    }

    public function setPetrolProduction(int $petrolProduction): self
    {
        $this->petrolProduction = $petrolProduction;

        return $this;
    }

    public function getUraniumProduction(): ?int
    {
        return $this->uraniumProduction;
    }

    public function setUraniumProduction(int $uraniumProduction): self
    {
        $this->uraniumProduction = $uraniumProduction;

        return $this;
    }

    public function getGoldProduction(): ?int
    {
        return $this->goldProduction;
    }

    public function setGoldProduction(int $goldProduction): self
    {
        $this->goldProduction = $goldProduction;

        return $this;
    }

    public function getSandProduction(): ?int
    {
        return $this->sandProduction;
    }

    public function setSandProduction(int $sandProduction): self
    {
        $this->sandProduction = $sandProduction;

        return $this;
    }

    public function getSteelProduction(): ?int
    {
        return $this->steelProduction;
    }

    public function setSteelProduction(int $steelProduction): self
    {
        $this->steelProduction = $steelProduction;

        return $this;
    }

    public function getCoalProduction(): ?int
    {
        return $this->coalProduction;
    }

    public function setCoalProduction(int $coalProduction): self
    {
        $this->coalProduction = $coalProduction;

        return $this;
    }

    public function getMoneyProduction(): ?int
    {
        return $this->moneyProduction;
    }

    public function setMoneyProduction(int $moneyProduction): self
    {
        $this->moneyProduction = $moneyProduction;

        return $this;
    }

    public function getIronConsumption(): ?int
    {
        return $this->ironConsumption;
    }

    public function setIronConsumption(int $ironConsumption): self
    {
        $this->ironConsumption = $ironConsumption;

        return $this;
    }

    public function getPetrolConsumption(): ?int
    {
        return $this->petrolConsumption;
    }

    public function setPetrolConsumption(int $petrolConsumption): self
    {
        $this->petrolConsumption = $petrolConsumption;

        return $this;
    }

    public function getUraniumConsumption(): ?int
    {
        return $this->uraniumConsumption;
    }

    public function setUraniumConsumption(int $uraniumConsumption): self
    {
        $this->uraniumConsumption = $uraniumConsumption;

        return $this;
    }

    public function getGoldConsumption(): ?int
    {
        return $this->goldConsumption;
    }

    public function setGoldConsumption(int $goldConsumption): self
    {
        $this->goldConsumption = $goldConsumption;

        return $this;
    }

    public function getSandConsumption(): ?int
    {
        return $this->sandConsumption;
    }

    public function setSandConsumption(int $sandConsumption): self
    {
        $this->sandConsumption = $sandConsumption;

        return $this;
    }

    public function getSteelConsumption(): ?int
    {
        return $this->steelConsumption;
    }

    public function setSteelConsumption(int $steelConsumption): self
    {
        $this->steelConsumption = $steelConsumption;

        return $this;
    }

    public function getCoalConsumption(): ?int
    {
        return $this->coalConsumption;
    }

    public function setCoalConsumption(int $coalConsumption): self
    {
        $this->coalConsumption = $coalConsumption;

        return $this;
    }

    public function getMoneyConsumption(): ?int
    {
        return $this->moneyConsumption;
    }

    public function setMoneyConsumption(int $moneyConsumption): self
    {
        $this->moneyConsumption = $moneyConsumption;

        return $this;
    }

    public function getMoneyCost(): ?int
    {
        return $this->moneyCost;
    }

    public function setMoneyCost(int $moneyCost): self
    {
        $this->moneyCost = $moneyCost;

        return $this;
    }

    public function getIronCost(): ?int
    {
        return $this->ironCost;
    }

    public function setIronCost(int $ironCost): self
    {
        $this->ironCost = $ironCost;

        return $this;
    }

    public function getPetrolCost(): ?int
    {
        return $this->petrolCost;
    }

    public function setPetrolCost(int $petrolCost): self
    {
        $this->petrolCost = $petrolCost;

        return $this;
    }

    public function getUraniumCost(): ?int
    {
        return $this->uraniumCost;
    }

    public function setUraniumCost(int $uraniumCost): self
    {
        $this->uraniumCost = $uraniumCost;

        return $this;
    }

    public function getGoldCost(): ?int
    {
        return $this->goldCost;
    }

    public function setGoldCost(int $goldCost): self
    {
        $this->goldCost = $goldCost;

        return $this;
    }

    public function getSandCost(): ?int
    {
        return $this->sandCost;
    }

    public function setSandCost(int $sandCost): self
    {
        $this->sandCost = $sandCost;

        return $this;
    }

    public function getSteelCost(): ?int
    {
        return $this->steelCost;
    }

    public function setSteelCost(int $steelCost): self
    {
        $this->steelCost = $steelCost;

        return $this;
    }

    public function getCoalCost(): ?int
    {
        return $this->coalCost;
    }

    public function setCoalCost(int $coalCost): self
    {
        $this->coalCost = $coalCost;

        return $this;
    }

    public function __toString(): string
    {
        return $this->getName();
    }

    public function getIronCapacity(): ?int
    {
        return $this->ironCapacity;
    }

    public function setIronCapacity(int $ironCapacity): self
    {
        $this->ironCapacity = $ironCapacity;

        return $this;
    }

    public function getPetrolCapacity(): ?int
    {
        return $this->petrolCapacity;
    }

    public function setPetrolCapacity(int $petrolCapacity): self
    {
        $this->petrolCapacity = $petrolCapacity;

        return $this;
    }

    public function getUraniumCapacity(): ?int
    {
        return $this->uraniumCapacity;
    }

    public function setUraniumCapacity(int $uraniumCapacity): self
    {
        $this->uraniumCapacity = $uraniumCapacity;

        return $this;
    }

    public function getGoldCapacity(): ?int
    {
        return $this->goldCapacity;
    }

    public function setGoldCapacity(int $goldCapacity): self
    {
        $this->goldCapacity = $goldCapacity;

        return $this;
    }

    public function getSandCapacity(): ?int
    {
        return $this->sandCapacity;
    }

    public function setSandCapacity(int $sandCapacity): self
    {
        $this->sandCapacity = $sandCapacity;

        return $this;
    }

    public function getSteelCapacity(): ?int
    {
        return $this->steelCapacity;
    }

    public function setSteelCapacity(int $steelCapacity): self
    {
        $this->steelCapacity = $steelCapacity;

        return $this;
    }

    public function getCoalCapacity(): ?int
    {
        return $this->coalCapacity;
    }

    public function setCoalCapacity(int $coalCapacity): self
    {
        $this->coalCapacity = $coalCapacity;

        return $this;
    }

    public function getTotalCapacity(): ?int
    {
        return $this->totalCapacity;
    }

    public function setTotalCapacity(int $totalCapacity): self
    {
        $this->totalCapacity = $totalCapacity;

        return $this;
    }
}
