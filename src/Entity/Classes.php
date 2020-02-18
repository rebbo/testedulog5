<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClassesRepository")
 */
class Classes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $classes_nom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClassesNom(): ?string
    {
        return $this->classes_nom;
    }

    public function setClassesNom(string $classes_nom): self
    {
        $this->classes_nom = $classes_nom;

        return $this;
    }
}
