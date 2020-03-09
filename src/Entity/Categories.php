<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoriesRepository")
 */
class Categories
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
     * @ORM\OneToMany(targetEntity="App\Entity\Series", mappedBy="categorieId", orphanRemoval=true)
     */
    private $serie;

    public function __construct()
    {
        $this->serie = new ArrayCollection();
    }

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

    /**
     * @return Collection|Series[]
     */
    public function getSerie(): Collection
    {
        return $this->serie;
    }

    public function addSerie(Series $serie): self
    {
        if (!$this->serie->contains($serie)) {
            $this->serie[] = $serie;
            $serie->setCategorieId($this);
        }

        return $this;
    }

    public function removeSerie(Series $serie): self
    {
        if ($this->serie->contains($serie)) {
            $this->serie->removeElement($serie);
            // set the owning side to null (unless already changed)
            if ($serie->getCategorieId() === $this) {
                $serie->setCategorieId(null);
            }
        }

        return $this;
    }
}
