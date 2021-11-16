<?php

namespace App\Entity;

use App\Repository\PubliciteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PubliciteRepository::class)
 */
class Publicite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=CentreDeBeaute::class, inversedBy="publicites")
     * @ORM\JoinColumn(nullable=true)
     */
    private $centredebeaute;

    /**
     * @ORM\ManyToOne(targetEntity=SalleDeMariage::class, inversedBy="publicites")
     * @ORM\JoinColumn(nullable=true)
     */
    private $salledemariage;

    /**
     * @ORM\ManyToOne(targetEntity=Photographe::class, inversedBy="publicites")
     * @ORM\JoinColumn(nullable=true)
     */
    private $photographe;

    /**
     * @ORM\ManyToOne(targetEntity=MusiqueDeMariage::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $musiquedemariage;

    /**
     * @ORM\ManyToOne(targetEntity=Admin::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $admin;

    /**
     * @ORM\ManyToOne(targetEntity=Traiteurs::class, inversedBy="publicite")
     * @ORM\JoinColumn(nullable=true)
     */
    private $traiteurs;

    /**
     * @ORM\ManyToOne(targetEntity=Coiffure::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $coiffure;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCentredebeaute(): ?CentreDeBeaute
    {
        return $this->centredebeaute;
    }

    public function setCentredebeaute(?CentreDeBeaute $centredebeaute): self
    {
        $this->centredebeaute = $centredebeaute;

        return $this;
    }

    public function getSalledemariage(): ?SalleDeMariage
    {
        return $this->salledemariage;
    }

    public function setSalledemariage(?SalleDeMariage $salledemariage): self
    {
        $this->salledemariage = $salledemariage;

        return $this;
    }

    public function getPhotographe(): ?Photographe
    {
        return $this->photographe;
    }

    public function setPhotographe(?Photographe $photographe): self
    {
        $this->photographe = $photographe;

        return $this;
    }

    public function getMusiquedemariage(): ?MusiqueDeMariage
    {
        return $this->musiquedemariage;
    }

    public function setMusiquedemariage(?MusiqueDeMariage $musiquedemariage): self
    {
        $this->musiquedemariage = $musiquedemariage;

        return $this;
    }

    public function getAdmin(): ?Admin
    {
        return $this->admin;
    }

    public function setAdmin(?Admin $admin): self
    {
        $this->admin = $admin;

        return $this;
    }

    public function getTraiteurs(): ?Traiteurs
    {
        return $this->traiteurs;
    }

    public function setTraiteurs(?Traiteurs $traiteurs): self
    {
        $this->traiteurs = $traiteurs;

        return $this;
    }

    public function getCoiffure(): ?Coiffure
    {
        return $this->coiffure;
    }

    public function setCoiffure(?Coiffure $coiffure): self
    {
        $this->coiffure = $coiffure;

        return $this;
    }

}
