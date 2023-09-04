<?php

namespace App\Entity;

use App\Repository\EquipevlrtRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipevlrtRepository::class)]
class Equipevlrt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $speudo = null;

    #[ORM\Column(length: 255)]
    private ?string $poste = null;

    #[ORM\Column(length: 500)]
    private ?string $img_pdp = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $age = null;

    #[ORM\Column(length: 255)]
    private ?string $twitter = null;

    #[ORM\Column(length: 255)]
    private ?string $twitch = null;

    #[ORM\Column(length: 255)]
    private ?string $insta = null;

    #[ORM\Column(length: 255)]
    private ?string $tiktok = null;

    #[ORM\Column(length: 255)]
    private ?string $youtube = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpeudo(): ?string
    {
        return $this->speudo;
    }

    public function setSpeudo(string $speudo): static
    {
        $this->speudo = $speudo;

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

    public function getImgPdp(): ?string
    {
        return $this->img_pdp;
    }

    public function setImgPdp(string $img_pdp): static
    {
        $this->img_pdp = $img_pdp;

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

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(string $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getTwitter(): ?string
    {
        return $this->twitter;
    }

    public function setTwitter(string $twitter): static
    {
        $this->twitter = $twitter;

        return $this;
    }

    public function getTwitch(): ?string
    {
        return $this->twitch;
    }

    public function setTwitch(string $twitch): static
    {
        $this->twitch = $twitch;

        return $this;
    }

    public function getInsta(): ?string
    {
        return $this->insta;
    }

    public function setInsta(string $insta): static
    {
        $this->insta = $insta;

        return $this;
    }

    public function getTiktok(): ?string
    {
        return $this->tiktok;
    }

    public function setTiktok(string $tiktok): static
    {
        $this->tiktok = $tiktok;

        return $this;
    }

    public function getYoutube(): ?string
    {
        return $this->youtube;
    }

    public function setYoutube(string $youtube): static
    {
        $this->youtube = $youtube;

        return $this;
    }
}
