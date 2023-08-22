<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\MusiqueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MusiqueRepository::class)]
#[ApiResource]
class Musique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $cheminMusique = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCheminMusique(): ?string
    {
        return $this->cheminMusique;
    }

    public function setCheminMusique(string $cheminMusique): static
    {
        $this->cheminMusique = $cheminMusique;

        return $this;
    }
}
