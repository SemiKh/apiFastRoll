<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\TokenRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TokenRepository::class)]
#[ApiResource]
class Token
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $cheminToken = null;

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

    public function getCheminToken(): ?string
    {
        return $this->cheminToken;
    }

    public function setCheminToken(string $cheminToken): static
    {
        $this->cheminToken = $cheminToken;

        return $this;
    }
}
