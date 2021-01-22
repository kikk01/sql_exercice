<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement", indexes={@ORM\Index(name="departement_code", columns={"departement_code"}), @ORM\Index(name="departement_nom_soundex", columns={"departement_nom_soundex"}), @ORM\Index(name="departement_slug", columns={"departement_slug"})})
 * @ORM\Entity
 */
class Departement
{
    /**
     * @var int
     *
     * @ORM\Column(name="departement_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $departementId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="departement_code", type="string", length=3, nullable=true)
     */
    private $departementCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="departement_nom", type="string", length=255, nullable=true)
     */
    private $departementNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="departement_nom_uppercase", type="string", length=255, nullable=true)
     */
    private $departementNomUppercase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="departement_slug", type="string", length=255, nullable=true)
     */
    private $departementSlug;

    /**
     * @var string|null
     *
     * @ORM\Column(name="departement_nom_soundex", type="string", length=20, nullable=true)
     */
    private $departementNomSoundex;

    public function getDepartementId(): ?int
    {
        return $this->departementId;
    }

    public function getDepartementCode(): ?string
    {
        return $this->departementCode;
    }

    public function setDepartementCode(?string $departementCode): self
    {
        $this->departementCode = $departementCode;

        return $this;
    }

    public function getDepartementNom(): ?string
    {
        return $this->departementNom;
    }

    public function setDepartementNom(?string $departementNom): self
    {
        $this->departementNom = $departementNom;

        return $this;
    }

    public function getDepartementNomUppercase(): ?string
    {
        return $this->departementNomUppercase;
    }

    public function setDepartementNomUppercase(?string $departementNomUppercase): self
    {
        $this->departementNomUppercase = $departementNomUppercase;

        return $this;
    }

    public function getDepartementSlug(): ?string
    {
        return $this->departementSlug;
    }

    public function setDepartementSlug(?string $departementSlug): self
    {
        $this->departementSlug = $departementSlug;

        return $this;
    }

    public function getDepartementNomSoundex(): ?string
    {
        return $this->departementNomSoundex;
    }

    public function setDepartementNomSoundex(?string $departementNomSoundex): self
    {
        $this->departementNomSoundex = $departementNomSoundex;

        return $this;
    }


}
