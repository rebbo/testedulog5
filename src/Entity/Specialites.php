<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpecialitesRepository")
 */
class Specialites
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom_specialites;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSpecialites(): ?string
    {
        return $this->nom_specialites;
    }

    public function setNomSpecialites(string $nom_specialites): self
    {
        $this->nom_specialites = $nom_specialites;

        return $this;
    }
}
