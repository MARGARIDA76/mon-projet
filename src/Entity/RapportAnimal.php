<?php

namespace App\Entity;

use App\Repository\RapportAnimalRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RapportAnimalRepository::class)]
class RapportAnimal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $etat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nourriture_Propose = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $grammage_Nourriture = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $date_Passage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getNourriturePropose(): ?string
    {
        return $this->nourriture_Propose;
    }

    public function setNourriturePropose(?string $nourriture_Propose): static
    {
        $this->nourriture_Propose = $nourriture_Propose;

        return $this;
    }

    public function getGrammageNourriture(): ?string
    {
        return $this->grammage_Nourriture;
    }

    public function setGrammageNourriture(?string $grammage_Nourriture): static
    {
        $this->grammage_Nourriture = $grammage_Nourriture;

        return $this;
    }

    public function getDatePassage(): ?\DateTimeImmutable
    {
        return $this->date_Passage;
    }

    public function setDatePassage(?\DateTimeImmutable $date_Passage): static
    {
        $this->date_Passage = $date_Passage;

        return $this;
    }
}
