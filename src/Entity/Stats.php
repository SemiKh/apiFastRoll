<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\StatsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatsRepository::class)]
#[ApiResource]
class Stats
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $caracteristique = null;

    #[ORM\Column]
    private ?int $valeur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCaracteristique(): ?string
    {
        return $this->caracteristique;
    }

    public function setCaracteristique(string $caracteristique): static
    {
        $this->caracteristique = $caracteristique;

        return $this;
    }

    public function getValeur(): ?int
    {
        return $this->valeur;
    }

    public function setValeur(int $valeur): static
    {
        $this->valeur = $valeur;

        return $this;
    }
}
