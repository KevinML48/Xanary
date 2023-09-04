<?php

namespace App\Entity;

use App\Repository\ActualitésRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActualitésRepository::class)]
class Actualités
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 400)]
    private ?string $actus_du_jours = null;

    #[ORM\Column(length: 400)]
    private ?string $actus_a_poster = null;

    #[ORM\Column(length: 400)]
    private ?string $actus_a_poster_1 = null;

    #[ORM\Column(length: 400)]
    private ?string $actus_a_poster_2 = null;

    #[ORM\Column(length: 400)]
    private ?string $actus_valorant = null;

    #[ORM\Column(length: 20)]
    private ?string $actus_type_evenementiel = null;

    #[ORM\Column(length: 10)]
    private ?string $actus_equipe_ascension = null;

    #[ORM\Column(length: 10)]
    private ?string $actus_equipe_anima = null;

    #[ORM\Column(length: 10)]
    private ?string $actus_date_valorant = null;

    #[ORM\Column(length: 400)]
    private ?string $actus_reseaux_valorant = null;

    #[ORM\Column(length: 30)]
    private ?string $actus_titre_informations_anima = null;

    #[ORM\Column(length: 30)]
    private ?string $actus_titre_informations_ascension = null;

    #[ORM\Column(length: 255)]
    private ?string $actus_texte_infortmations_ascension = null;

    #[ORM\Column(length: 255)]
    private ?string $actus_texte_informations_anima = null;

    #[ORM\Column(length: 400)]
    private ?string $actus_images_informations_anima = null;

    #[ORM\Column(length: 400)]
    private ?string $actus_images_informations_ascension = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActusDuJours(): ?string
    {
        return $this->actus_du_jours;
    }

    public function setActusDuJours(string $actus_du_jours): static
    {
        $this->actus_du_jours = $actus_du_jours;

        return $this;
    }

    public function getActusAPoster(): ?string
    {
        return $this->actus_a_poster;
    }

    public function setActusAPoster(string $actus_a_poster): static
    {
        $this->actus_a_poster = $actus_a_poster;

        return $this;
    }

    public function getActusAPoster1(): ?string
    {
        return $this->actus_a_poster_1;
    }

    public function setActusAPoster1(string $actus_a_poster_1): static
    {
        $this->actus_a_poster_1 = $actus_a_poster_1;

        return $this;
    }

    public function getActusAPoster2(): ?string
    {
        return $this->actus_a_poster_2;
    }

    public function setActusAPoster2(string $actus_a_poster_2): static
    {
        $this->actus_a_poster_2 = $actus_a_poster_2;

        return $this;
    }

    public function getActusValorant(): ?string
    {
        return $this->actus_valorant;
    }

    public function setActusValorant(string $actus_valorant): static
    {
        $this->actus_valorant = $actus_valorant;

        return $this;
    }

    public function getActusTypeEvenementiel(): ?string
    {
        return $this->actus_type_evenementiel;
    }

    public function setActusTypeEvenementiel(string $actus_type_evenementiel): static
    {
        $this->actus_type_evenementiel = $actus_type_evenementiel;

        return $this;
    }

    public function getActusEquipeAscension(): ?string
    {
        return $this->actus_equipe_ascension;
    }

    public function setActusEquipeAscension(string $actus_equipe_ascension): static
    {
        $this->actus_equipe_ascension = $actus_equipe_ascension;

        return $this;
    }

    public function getActusEquipeAnima(): ?string
    {
        return $this->actus_equipe_anima;
    }

    public function setActusEquipeAnima(string $actus_equipe_anima): static
    {
        $this->actus_equipe_anima = $actus_equipe_anima;

        return $this;
    }

    public function getActusDateValorant(): ?string
    {
        return $this->actus_date_valorant;
    }

    public function setActusDateValorant(string $actus_date_valorant): static
    {
        $this->actus_date_valorant = $actus_date_valorant;

        return $this;
    }

    public function getActusReseauxValorant(): ?string
    {
        return $this->actus_reseaux_valorant;
    }

    public function setActusReseauxValorant(string $actus_reseaux_valorant): static
    {
        $this->actus_reseaux_valorant = $actus_reseaux_valorant;

        return $this;
    }

    public function getActusTitreInformationsAnima(): ?string
    {
        return $this->actus_titre_informations_anima;
    }

    public function setActusTitreInformationsAnima(string $actus_titre_informations_anima): static
    {
        $this->actus_titre_informations_anima = $actus_titre_informations_anima;

        return $this;
    }

    public function getActusTitreInformationsAscension(): ?string
    {
        return $this->actus_titre_informations_ascension;
    }

    public function setActusTitreInformationsAscension(string $actus_titre_informations_ascension): static
    {
        $this->actus_titre_informations_ascension = $actus_titre_informations_ascension;

        return $this;
    }

    public function getActusTexteInfortmationsAscension(): ?string
    {
        return $this->actus_texte_infortmations_ascension;
    }

    public function setActusTexteInfortmationsAscension(string $actus_texte_infortmations_ascension): static
    {
        $this->actus_texte_infortmations_ascension = $actus_texte_infortmations_ascension;

        return $this;
    }

    public function getActusTexteInformationsAnima(): ?string
    {
        return $this->actus_texte_informations_anima;
    }

    public function setActusTexteInformationsAnima(string $actus_texte_informations_anima): static
    {
        $this->actus_texte_informations_anima = $actus_texte_informations_anima;

        return $this;
    }

    public function getActusImagesInformationsAnima(): ?string
    {
        return $this->actus_images_informations_anima;
    }

    public function setActusImagesInformationsAnima(string $actus_images_informations_anima): static
    {
        $this->actus_images_informations_anima = $actus_images_informations_anima;

        return $this;
    }

    public function getActusImagesInformationsAscension(): ?string
    {
        return $this->actus_images_informations_ascension;
    }

    public function setActusImagesInformationsAscension(string $actus_images_informations_ascension): static
    {
        $this->actus_images_informations_ascension = $actus_images_informations_ascension;

        return $this;
    }
}
