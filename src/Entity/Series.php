<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SeriesRepository")
 */
class Series
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
    private $nom;

    /**
     * @ORM\Column(type="datetime")
     */
    private $anneeDebut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $anneeFin;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $affiche;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $saisons;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categories", inversedBy="serie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorieId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAnneeDebut(): ?\DateTimeInterface
    {
        return $this->anneeDebut;
    }

    public function setAnneeDebut(\DateTimeInterface $anneeDebut): self
    {
        $this->anneeDebut = $anneeDebut;

        return $this;
    }

    public function getAnneeFin(): ?\DateTimeInterface
    {
        return $this->anneeFin;
    }

    public function setAnneeFin(\DateTimeInterface $anneeFin): self
    {
        $this->anneeFin = $anneeFin;

        return $this;
    }

    public function getAffiche(): ?string
    {
        return $this->affiche;
    }

    public function setAffiche(?string $affiche): self
    {
        $this->affiche = $affiche;

        return $this;
    }

    public function getSaisons(): ?string
    {
        return $this->saisons;
    }

    public function setSaisons(string $saisons): self
    {
        $this->saisons = $saisons;

        return $this;
    }

    public function getCategorieId(): ?Categories
    {
        return $this->categorieId;
    }

    public function setCategorieId(?Categories $categorieId): self
    {
        $this->categorieId = $categorieId;

        return $this;
    }
}
