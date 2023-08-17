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
    private ?string $manager_poste = null;

    #[ORM\Column(length: 255)]
    private ?string $coach_poste = null;

    #[ORM\Column(length: 255)]
    private ?string $helper_poste = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $manager_pp = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $coach_pp = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $helper_pp = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $manager_pp_description = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $coach_pp_description = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $helper_pp_description = null;

    #[ORM\Column(length: 255)]
    private ?string $smokey_poste = null;

    #[ORM\Column(length: 255)]
    private ?string $trapa_poste = null;

    #[ORM\Column(length: 255)]
    private ?string $typed_poste = null;

    #[ORM\Column(length: 255)]
    private ?string $ginkgo_poste = null;

    #[ORM\Column(length: 255)]
    private ?string $realzz_poste = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $smokey_pp = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $trapa_pp = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $typed_pp = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $gingko_pp = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $realzz_pp = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $smokey_pp_speudo = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $trapa_pp_speudo = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $typed_pp_speudo = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $gingko_pp_speudo = null;

    #[ORM\Column(type: "text", length: "800")]
    private ?string $realzz_pp_speudo = null;

    #[ORM\Column(length: 255)]
    private ?string $smokey_age = null;

    #[ORM\Column(length: 255)]
    private ?string $trapa_age = null;

    #[ORM\Column(length: 255)]
    private ?string $typed_age = null;

    #[ORM\Column(length: 255)]
    private ?string $gingko_age = null;

    #[ORM\Column(length: 255)]
    private ?string $realzz_age = null;

    #[ORM\Column(length: 255)]
    private ?string $smokey_description = null;

    #[ORM\Column(length: 255)]
    private ?string $trapa_description = null;

    #[ORM\Column(length: 255)]
    private ?string $typed_description = null;

    #[ORM\Column(length: 255)]
    private ?string $gingko_description = null;

    #[ORM\Column(length: 255)]
    private ?string $realzz_description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getManagerPoste(): ?string
    {
        return $this->manager_poste;
    }

    public function setManagerPoste(string $manager_poste): static
    {
        $this->manager_poste = $manager_poste;

        return $this;
    }

    public function getCoachPoste(): ?string
    {
        return $this->coach_poste;
    }

    public function setCoachPoste(string $coach_poste): static
    {
        $this->coach_poste = $coach_poste;

        return $this;
    }

    public function getHelperPoste(): ?string
    {
        return $this->helper_poste;
    }

    public function setHelperPoste(string $helper_poste): static
    {
        $this->helper_poste = $helper_poste;

        return $this;
    }

    public function getManagerPp(): ?string
    {
        return $this->manager_pp;
    }

    public function setManagerPp(string $manager_pp): static
    {
        $this->manager_pp = $manager_pp;

        return $this;
    }

    public function getCoachPp(): ?string
    {
        return $this->coach_pp;
    }

    public function setCoachPp(string $coach_pp): static
    {
        $this->coach_pp = $coach_pp;

        return $this;
    }

    public function getHelperPp(): ?string
    {
        return $this->helper_pp;
    }

    public function setHelperPp(string $helper_pp): static
    {
        $this->helper_pp = $helper_pp;

        return $this;
    }

    public function getManagerPpDescription(): ?string
    {
        return $this->manager_pp_description;
    }

    public function setManagerPpDescription(string $manager_pp_description): static
    {
        $this->manager_pp_description = $manager_pp_description;

        return $this;
    }

    public function getCoachPpDescription(): ?string
    {
        return $this->coach_pp_description;
    }

    public function setCoachPpDescription(string $coach_pp_description): static
    {
        $this->coach_pp_description = $coach_pp_description;

        return $this;
    }

    public function getHelperPpDescription(): ?string
    {
        return $this->helper_pp_description;
    }

    public function setHelperPpDescription(string $helper_pp_description): static
    {
        $this->helper_pp_description = $helper_pp_description;

        return $this;
    }

    public function getSmokeyPoste(): ?string
    {
        return $this->smokey_poste;
    }

    public function setSmokeyPoste(string $smokey_poste): static
    {
        $this->smokey_poste = $smokey_poste;

        return $this;
    }

    public function getTrapaPoste(): ?string
    {
        return $this->trapa_poste;
    }

    public function setTrapaPoste(string $trapa_poste): static
    {
        $this->trapa_poste = $trapa_poste;

        return $this;
    }

    public function getTypedPoste(): ?string
    {
        return $this->typed_poste;
    }

    public function setTypedPoste(string $typed_poste): static
    {
        $this->typed_poste = $typed_poste;

        return $this;
    }

    public function getGinkgoPoste(): ?string
    {
        return $this->ginkgo_poste;
    }

    public function setGinkgoPoste(string $ginkgo_poste): static
    {
        $this->ginkgo_poste = $ginkgo_poste;

        return $this;
    }

    public function getRealzzPoste(): ?string
    {
        return $this->realzz_poste;
    }

    public function setRealzzPoste(string $realzz_poste): static
    {
        $this->realzz_poste = $realzz_poste;

        return $this;
    }

    public function getSmokeyPp(): ?string
    {
        return $this->smokey_pp;
    }

    public function setSmokeyPp(string $smokey_pp): static
    {
        $this->smokey_pp = $smokey_pp;

        return $this;
    }

    public function getTrapaPp(): ?string
    {
        return $this->trapa_pp;
    }

    public function setTrapaPp(string $trapa_pp): static
    {
        $this->trapa_pp = $trapa_pp;

        return $this;
    }

    public function getTypedPp(): ?string
    {
        return $this->typed_pp;
    }

    public function setTypedPp(string $typed_pp): static
    {
        $this->typed_pp = $typed_pp;

        return $this;
    }

    public function getGingkoPp(): ?string
    {
        return $this->gingko_pp;
    }

    public function setGingkoPp(string $gingko_pp): static
    {
        $this->gingko_pp = $gingko_pp;

        return $this;
    }

    public function getRealzzPp(): ?string
    {
        return $this->realzz_pp;
    }

    public function setRealzzPp(string $realzz_pp): static
    {
        $this->realzz_pp = $realzz_pp;

        return $this;
    }

    public function getSmokeyPpSpeudo(): ?string
    {
        return $this->smokey_pp_speudo;
    }

    public function setSmokeyPpSpeudo(string $smokey_pp_speudo): static
    {
        $this->smokey_pp_speudo = $smokey_pp_speudo;

        return $this;
    }

    public function getTrapaPpSpeudo(): ?string
    {
        return $this->trapa_pp_speudo;
    }

    public function setTrapaPpSpeudo(string $trapa_pp_speudo): static
    {
        $this->trapa_pp_speudo = $trapa_pp_speudo;

        return $this;
    }

    public function getTypedPpSpeudo(): ?string
    {
        return $this->typed_pp_speudo;
    }

    public function setTypedPpSpeudo(string $typed_img_speudo): static
    {
        $this->typed_img_speudo = $typed_pp_speudo;

        return $this;
    }

    public function getGingkoPpSpeudo(): ?string
    {
        return $this->gingko_pp_speudo;
    }

    public function setGingkoPpSpeudo(string $gingko_pp_speudo): static
    {
        $this->gingko_pp_speudo = $gingko_pp_speudo;

        return $this;
    }

    public function getRealzzPpSpeudo(): ?string
    {
        return $this->realzz_pp_speudo;
    }

    public function setRealzzPpSpeudo(string $realzz_pp_speudo): static
    {
        $this->realzz_pp_speudo = $realzz_pp_speudo;

        return $this;
    }

    public function getSmokeyAge(): ?string
    {
        return $this->smokey_age;
    }

    public function setSmokeyAge(string $smokey_age): static
    {
        $this->smokey_age = $smokey_age;

        return $this;
    }

    public function getTrapaAge(): ?string
    {
        return $this->trapa_age;
    }

    public function setTrapaAge(string $trapa_age): static
    {
        $this->trapa_age = $trapa_age;

        return $this;
    }

    public function getTypedAge(): ?string
    {
        return $this->typed_age;
    }

    public function setTypedAge(string $typed_age): static
    {
        $this->typed_age = $typed_age;

        return $this;
    }

    public function getGingkoAge(): ?string
    {
        return $this->gingko_age;
    }

    public function setGingkoAge(string $gingko): static
    {
        $this->gingko = $gingko_age;

        return $this;
    }

    public function getRealzzAge(): ?string
    {
        return $this->realzz_age;
    }

    public function setRealzzAge(string $realzz_age): static
    {
        $this->realzz_age = $realzz_age;

        return $this;
    }

    public function getSmokeyDescription(): ?string
    {
        return $this->smokey_description;
    }

    public function setSmokeyDescription(string $smokey_description): static
    {
        $this->smokey_description = $smokey_description;

        return $this;
    }

    public function getTrapaDescription(): ?string
    {
        return $this->trapa_description;
    }

    public function setTrapaDescription(string $trapa_description): static
    {
        $this->trapa_description = $trapa_description;

        return $this;
    }

    public function getTypedDescription(): ?string
    {
        return $this->typed_description;
    }

    public function setTypedDescription(string $typed_description): static
    {
        $this->typed_description = $typed_description;

        return $this;
    }

    public function getGingkoDescription(): ?string
    {
        return $this->gingko_description;
    }

    public function setGingkoDescription(string $gingko_description): static
    {
        $this->gingko_description = $gingko_description;

        return $this;
    }

    public function getRealzzDescription(): ?string
    {
        return $this->realzz_description;
    }

    public function setRealzzDescription(string $realzz_description): static
    {
        $this->realzz_description = $realzz_description;

        return $this;
    }
}
