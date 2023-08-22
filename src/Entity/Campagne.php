<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CampagneRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CampagneRepository::class)]
#[ApiResource]
class Campagne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $regle = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $lore = null;

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

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getRegle(): ?string
    {
        return $this->regle;
    }

    public function setRegle(string $regle): static
    {
        $this->regle = $regle;

        return $this;
    }

    public function getLore(): ?string
    {
        return $this->lore;
    }

    public function setLore(string $lore): static
    {
        $this->lore = $lore;

        return $this;
    }
}
