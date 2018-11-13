<?php

namespace App\Entity\Core;

use App\Entity\Merchant\Merchant;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="RegionRepository")
 */
class Region
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=12)
     */
    private $latitude;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=12)
     */
    private $longitude;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Merchant\Merchant", mappedBy="region")
     */
    private $merchants;

    public function __construct()
    {
        $this->merchants = new ArrayCollection();
    }



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

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return Collection|Merchant[]
     */
    public function getMerchants(): Collection
    {
        return $this->merchants;
    }

    public function addMerchant(Merchant $merchant): self
    {
        if (!$this->merchants->contains($merchant)) {
            $this->merchants[] = $merchant;
            $merchant->setRegion($this);
        }

        return $this;
    }

    public function removeMerchant(Merchant $merchant): self
    {
        if ($this->merchants->contains($merchant)) {
            $this->merchants->removeElement($merchant);
            // set the owning side to null (unless already changed)
            if ($merchant->getRegion() === $this) {
                $merchant->setRegion(null);
            }
        }

        return $this;
    }

}
