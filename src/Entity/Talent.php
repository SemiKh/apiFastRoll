<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\TalentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TalentRepository::class)]
#[ApiResource]
class Talent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $bonus = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBonus(): ?int
    {
        return $this->bonus;
    }

    public function setBonus(int $bonus): static
    {
        $this->bonus = $bonus;

        return $this;
    }
}
