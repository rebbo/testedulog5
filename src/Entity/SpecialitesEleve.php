<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpecialitesEleveRepository")
 */
class SpecialitesEleve
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idEleve;

    /**
     * @ORM\Column(type="integer")
     */
    private $idSpecialites;

    /**
     * @ORM\Column(type="integer")
     */
    private $idClasse;

    /**
     * @ORM\Column(type="boolean")
     */
    private $flagDiscution;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEleve(): ?int
    {
        return $this->idEleve;
    }

    public function setIdEleve(int $idEleve): self
    {
        $this->idEleve = $idEleve;

        return $this;
    }

    public function getIdSpecialites(): ?int
    {
        return $this->idSpecialites;
    }

    public function setIdSpecialites(int $idSpecialites): self
    {
        $this->idSpecialites = $idSpecialites;

        return $this;
    }

    public function getIdClasse(): ?int
    {
        return $this->idClasse;
    }

    public function setIdClasse(int $idClasse): self
    {
        $this->idClasse = $idClasse;

        return $this;
    }

    public function getFlagDiscution(): ?bool
    {
        return $this->flagDiscution;
    }

    public function setFlagDiscution(bool $flagDiscution): self
    {
        $this->flagDiscution = $flagDiscution;

        return $this;
    }
}
