<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\ManyToOne(targetEntity=SalleDeMariage::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $salledemariage;

    /**
     * @ORM\ManyToOne(targetEntity=MusiqueDeMariage::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $musiquedemariage;

    /**
     * @ORM\ManyToOne(targetEntity=Photographe::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $photographe;

    /**
     * @ORM\ManyToOne(targetEntity=CentreDeBeaute::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $centredebeaute;

    /**
     * @ORM\ManyToOne(targetEntity=Admin::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $admin;

   

   

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=SalleDeMariage::class, inversedBy="commentaire")
     * @ORM\JoinColumn(nullable=true)
     */
    private $salleDeMariage;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Traiteurs::class, inversedBy="commentaire")
     * @ORM\JoinColumn(nullable=true)
     */
    private $traiteurs;

    /**
     * @ORM\ManyToOne(targetEntity=Photographe::class, inversedBy="commentaire")
     */
    private $photographes;

    /**
     * @ORM\ManyToOne(targetEntity=Coiffure::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $coiffure;

    /**
     * @ORM\ManyToOne(targetEntity=MusiqueDeMariage::class, inversedBy="commentaire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $musiqueDeMariage;

    /**
     * @ORM\ManyToOne(targetEntity=VoyageDeNoce::class, inversedBy="commentaire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $voyageDeNoce;

  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

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

    public function getMusiquedemariage(): ?MusiqueDeMariage
    {
        return $this->musiquedemariage;
    }

    public function setMusiquedemariage(?MusiqueDeMariage $musiquedemariage): self
    {
        $this->musiquedemariage = $musiquedemariage;

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

    public function getCentredebeaute(): ?CentreDeBeaute
    {
        return $this->centredebeaute;
    }

    public function setCentredebeaute(?CentreDeBeaute $centredebeaute): self
    {
        $this->centredebeaute = $centredebeaute;

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



    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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

    public function getPhotographes(): ?Photographe
    {
        return $this->photographes;
    }

    public function setPhotographes(?Photographe $photographes): self
    {
        $this->photographes = $photographes;

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

    public function getVoyageDeNoce(): ?VoyageDeNoce
    {
        return $this->voyageDeNoce;
    }

    public function setVoyageDeNoce(?VoyageDeNoce $voyageDeNoce): self
    {
        $this->voyageDeNoce = $voyageDeNoce;

        return $this;
    }

  
}
