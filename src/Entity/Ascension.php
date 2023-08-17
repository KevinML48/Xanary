<?php

namespace App\Entity;

use App\Repository\AscensionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AscensionRepository::class)]
class Ascension
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $pseudo = null;

    #[ORM\Column(length: 255)]
    private ?string $roles = null;

    #[ORM\Column(length: 255)]
    private ?string $age = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 5000)]
    private ?string $image_url = null;

    #[ORM\Column(length: 5000)]
    private ?string $image_speudo = null;

    #[ORM\Column(length: 5000)]
    private ?string $image_id = null;

    #[ORM\Column(length: 255)]
    private ?string $poste = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): static
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getRoles(): ?string
    {
        return $this->roles;
    }

    public function setRoles(string $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(string $age): static
    {
        $this->age = $age;

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

    public function getImageUrl(): ?string
    {
        return $this->image_url;
    }

    public function setImageUrl(string $image_url): static
    {
        $this->image_url = $image_url;

        return $this;
    }

    public function getImageSpeudo(): ?string
    {
        return $this->image_speudo;
    }

    public function setImageSpeudo(string $image_speudo): static
    {
        $this->image_speudo = $image_speudo;

        return $this;
    }

    public function getImageId(): ?string
    {
        return $this->image_id;
    }

    public function setImageId(string $image_id): static
    {
        $this->image_id = $image_id;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(string $poste): static
    {
        $this->poste = $poste;

        return $this;
    }
}
