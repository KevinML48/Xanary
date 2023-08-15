<?php

namespace App\Entity;

use App\Repository\PartenaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PartenaireRepository::class)]
class Partenaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 5000, nullable: true)]
    private ?string $description_partenaires = null;

    #[ORM\Column(length: 255)]
    private ?string $colaboration = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $site = null;

    #[ORM\Column(length: 5000, nullable: true)]
    private ?string $image_url = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDescriptionPartenaires(): ?string
    {
    return $this->description_partenaires;
    }

    public function setDescriptionPartenaires(?string $description_partenaires): static
    {
        $this->description_partenaires = $description_partenaires;

        return $this;
    }

    public function getColaboration(): ?string
    {
        return $this->colaboration;
    }

    public function setColaboration(string $colaboration): static
    {
        $this->colaboration = $colaboration;

        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(?string $site): static
    {
        $this->site = $site;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->image_url;
    }

    public function setImageUrl(?string $image_url): static
    {
        $this->image_url = $image_url;

        return $this;
    }
}
