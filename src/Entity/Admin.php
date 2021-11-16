<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 */
class Admin
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mot_passe;

    /**
     * @ORM\OneToMany(targetEntity=Costume::class, mappedBy="admin")
     */
    private $costumes;

    public function __construct()
    {
        $this->costumes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMotPasse(): ?string
    {
        return $this->mot_passe;
    }

    public function setMotPasse(string $mot_passe): self
    {
        $this->mot_passe = $mot_passe;

        return $this;
    }

    /**
     * @return Collection|Costume[]
     */
    public function getCostumes(): Collection
    {
        return $this->costumes;
    }

    public function addCostume(Costume $costume): self
    {
        if (!$this->costumes->contains($costume)) {
            $this->costumes[] = $costume;
            $costume->setAdmin($this);
        }

        return $this;
    }

    public function removeCostume(Costume $costume): self
    {
        if ($this->costumes->removeElement($costume)) {
            // set the owning side to null (unless already changed)
            if ($costume->getAdmin() === $this) {
                $costume->setAdmin(null);
            }
        }

        return $this;
    }
}
