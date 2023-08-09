<?php

namespace App\Entity;

use App\Repository\ReceptionContactRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReceptionContactRepository::class)]
class ReceptionContact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $sujet = null;

    #[ORM\Column(length: 255)]
    private ?string $poles = null;

    #[ORM\Column(length: 255)]
    private ?string $equipe = null;

    #[ORM\Column(length: 255)]
    private ?string $roles = null;

    #[ORM\Column(length: 255)]
    private ?string $reseaux = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(string $sujet): static
    {
        $this->sujet = $sujet;

        return $this;
    }

    public function getPoles(): ?string
    {
        return $this->poles;
    }

    public function setPoles(string $poles): static
    {
        $this->poles = $poles;

        return $this;
    }

    public function getEquipe(): ?string
    {
        return $this->equipe;
    }

    public function setEquipe(string $equipe): static
    {
        $this->equipe = $equipe;

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

    public function getReseaux(): ?string
    {
        return $this->reseaux;
    }

    public function setReseaux(string $reseaux): static
    {
        $this->reseaux = $reseaux;

        return $this;
    }
}
