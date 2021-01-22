<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VillesFranceFree
 *
 * @ORM\Table(name="villes_france_free", uniqueConstraints={@ORM\UniqueConstraint(name="ville_code_commune_2", columns={"ville_code_commune"}), @ORM\UniqueConstraint(name="ville_slug", columns={"ville_slug"})}, indexes={@ORM\Index(name="ville_code_commune", columns={"ville_code_commune"}), @ORM\Index(name="ville_code_postal", columns={"ville_code_postal"}), @ORM\Index(name="ville_departement", columns={"ville_departement"}), @ORM\Index(name="ville_longitude_latitude_deg", columns={"ville_longitude_deg", "ville_latitude_deg"}), @ORM\Index(name="ville_nom", columns={"ville_nom"}), @ORM\Index(name="ville_nom_metaphone", columns={"ville_nom_metaphone"}), @ORM\Index(name="ville_nom_reel", columns={"ville_nom_reel"}), @ORM\Index(name="ville_nom_simple", columns={"ville_nom_simple"}), @ORM\Index(name="ville_nom_soundex", columns={"ville_nom_soundex"}), @ORM\Index(name="ville_population_2010", columns={"ville_population_2010"})})
 * @ORM\Entity
 */
class VillesFranceFree
{
    /**
     * @var int
     *
     * @ORM\Column(name="ville_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $villeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville_departement", type="string", length=3, nullable=true)
     */
    private $villeDepartement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville_slug", type="string", length=255, nullable=true)
     */
    private $villeSlug;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville_nom", type="string", length=45, nullable=true)
     */
    private $villeNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville_nom_simple", type="string", length=45, nullable=true)
     */
    private $villeNomSimple;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville_nom_reel", type="string", length=45, nullable=true)
     */
    private $villeNomReel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville_nom_soundex", type="string", length=20, nullable=true)
     */
    private $villeNomSoundex;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville_nom_metaphone", type="string", length=22, nullable=true)
     */
    private $villeNomMetaphone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville_code_postal", type="string", length=255, nullable=true)
     */
    private $villeCodePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville_commune", type="string", length=3, nullable=true)
     */
    private $villeCommune;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_code_commune", type="string", length=5, nullable=false)
     */
    private $villeCodeCommune;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ville_arrondissement", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $villeArrondissement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville_canton", type="string", length=4, nullable=true)
     */
    private $villeCanton;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ville_amdi", type="smallint", nullable=true, options={"unsigned"=true})
     */
    private $villeAmdi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ville_population_2010", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $villePopulation2010;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ville_population_1999", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $villePopulation1999;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ville_population_2012", type="integer", nullable=true, options={"unsigned"=true,"comment"="approximatif"})
     */
    private $villePopulation2012;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ville_densite_2010", type="integer", nullable=true)
     */
    private $villeDensite2010;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ville_surface", type="float", precision=10, scale=0, nullable=true)
     */
    private $villeSurface;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ville_longitude_deg", type="float", precision=10, scale=0, nullable=true)
     */
    private $villeLongitudeDeg;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ville_latitude_deg", type="float", precision=10, scale=0, nullable=true)
     */
    private $villeLatitudeDeg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville_longitude_grd", type="string", length=9, nullable=true)
     */
    private $villeLongitudeGrd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville_latitude_grd", type="string", length=8, nullable=true)
     */
    private $villeLatitudeGrd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville_longitude_dms", type="string", length=9, nullable=true)
     */
    private $villeLongitudeDms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville_latitude_dms", type="string", length=8, nullable=true)
     */
    private $villeLatitudeDms;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ville_zmin", type="integer", nullable=true)
     */
    private $villeZmin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ville_zmax", type="integer", nullable=true)
     */
    private $villeZmax;

    public function getVilleId(): ?int
    {
        return $this->villeId;
    }

    public function getVilleDepartement(): ?string
    {
        return $this->villeDepartement;
    }

    public function setVilleDepartement(?string $villeDepartement): self
    {
        $this->villeDepartement = $villeDepartement;

        return $this;
    }

    public function getVilleSlug(): ?string
    {
        return $this->villeSlug;
    }

    public function setVilleSlug(?string $villeSlug): self
    {
        $this->villeSlug = $villeSlug;

        return $this;
    }

    public function getVilleNom(): ?string
    {
        return $this->villeNom;
    }

    public function setVilleNom(?string $villeNom): self
    {
        $this->villeNom = $villeNom;

        return $this;
    }

    public function getVilleNomSimple(): ?string
    {
        return $this->villeNomSimple;
    }

    public function setVilleNomSimple(?string $villeNomSimple): self
    {
        $this->villeNomSimple = $villeNomSimple;

        return $this;
    }

    public function getVilleNomReel(): ?string
    {
        return $this->villeNomReel;
    }

    public function setVilleNomReel(?string $villeNomReel): self
    {
        $this->villeNomReel = $villeNomReel;

        return $this;
    }

    public function getVilleNomSoundex(): ?string
    {
        return $this->villeNomSoundex;
    }

    public function setVilleNomSoundex(?string $villeNomSoundex): self
    {
        $this->villeNomSoundex = $villeNomSoundex;

        return $this;
    }

    public function getVilleNomMetaphone(): ?string
    {
        return $this->villeNomMetaphone;
    }

    public function setVilleNomMetaphone(?string $villeNomMetaphone): self
    {
        $this->villeNomMetaphone = $villeNomMetaphone;

        return $this;
    }

    public function getVilleCodePostal(): ?string
    {
        return $this->villeCodePostal;
    }

    public function setVilleCodePostal(?string $villeCodePostal): self
    {
        $this->villeCodePostal = $villeCodePostal;

        return $this;
    }

    public function getVilleCommune(): ?string
    {
        return $this->villeCommune;
    }

    public function setVilleCommune(?string $villeCommune): self
    {
        $this->villeCommune = $villeCommune;

        return $this;
    }

    public function getVilleCodeCommune(): ?string
    {
        return $this->villeCodeCommune;
    }

    public function setVilleCodeCommune(string $villeCodeCommune): self
    {
        $this->villeCodeCommune = $villeCodeCommune;

        return $this;
    }

    public function getVilleArrondissement(): ?int
    {
        return $this->villeArrondissement;
    }

    public function setVilleArrondissement(?int $villeArrondissement): self
    {
        $this->villeArrondissement = $villeArrondissement;

        return $this;
    }

    public function getVilleCanton(): ?string
    {
        return $this->villeCanton;
    }

    public function setVilleCanton(?string $villeCanton): self
    {
        $this->villeCanton = $villeCanton;

        return $this;
    }

    public function getVilleAmdi(): ?int
    {
        return $this->villeAmdi;
    }

    public function setVilleAmdi(?int $villeAmdi): self
    {
        $this->villeAmdi = $villeAmdi;

        return $this;
    }

    public function getVillePopulation2010(): ?int
    {
        return $this->villePopulation2010;
    }

    public function setVillePopulation2010(?int $villePopulation2010): self
    {
        $this->villePopulation2010 = $villePopulation2010;

        return $this;
    }

    public function getVillePopulation1999(): ?int
    {
        return $this->villePopulation1999;
    }

    public function setVillePopulation1999(?int $villePopulation1999): self
    {
        $this->villePopulation1999 = $villePopulation1999;

        return $this;
    }

    public function getVillePopulation2012(): ?int
    {
        return $this->villePopulation2012;
    }

    public function setVillePopulation2012(?int $villePopulation2012): self
    {
        $this->villePopulation2012 = $villePopulation2012;

        return $this;
    }

    public function getVilleDensite2010(): ?int
    {
        return $this->villeDensite2010;
    }

    public function setVilleDensite2010(?int $villeDensite2010): self
    {
        $this->villeDensite2010 = $villeDensite2010;

        return $this;
    }

    public function getVilleSurface(): ?float
    {
        return $this->villeSurface;
    }

    public function setVilleSurface(?float $villeSurface): self
    {
        $this->villeSurface = $villeSurface;

        return $this;
    }

    public function getVilleLongitudeDeg(): ?float
    {
        return $this->villeLongitudeDeg;
    }

    public function setVilleLongitudeDeg(?float $villeLongitudeDeg): self
    {
        $this->villeLongitudeDeg = $villeLongitudeDeg;

        return $this;
    }

    public function getVilleLatitudeDeg(): ?float
    {
        return $this->villeLatitudeDeg;
    }

    public function setVilleLatitudeDeg(?float $villeLatitudeDeg): self
    {
        $this->villeLatitudeDeg = $villeLatitudeDeg;

        return $this;
    }

    public function getVilleLongitudeGrd(): ?string
    {
        return $this->villeLongitudeGrd;
    }

    public function setVilleLongitudeGrd(?string $villeLongitudeGrd): self
    {
        $this->villeLongitudeGrd = $villeLongitudeGrd;

        return $this;
    }

    public function getVilleLatitudeGrd(): ?string
    {
        return $this->villeLatitudeGrd;
    }

    public function setVilleLatitudeGrd(?string $villeLatitudeGrd): self
    {
        $this->villeLatitudeGrd = $villeLatitudeGrd;

        return $this;
    }

    public function getVilleLongitudeDms(): ?string
    {
        return $this->villeLongitudeDms;
    }

    public function setVilleLongitudeDms(?string $villeLongitudeDms): self
    {
        $this->villeLongitudeDms = $villeLongitudeDms;

        return $this;
    }

    public function getVilleLatitudeDms(): ?string
    {
        return $this->villeLatitudeDms;
    }

    public function setVilleLatitudeDms(?string $villeLatitudeDms): self
    {
        $this->villeLatitudeDms = $villeLatitudeDms;

        return $this;
    }

    public function getVilleZmin(): ?int
    {
        return $this->villeZmin;
    }

    public function setVilleZmin(?int $villeZmin): self
    {
        $this->villeZmin = $villeZmin;

        return $this;
    }

    public function getVilleZmax(): ?int
    {
        return $this->villeZmax;
    }

    public function setVilleZmax(?int $villeZmax): self
    {
        $this->villeZmax = $villeZmax;

        return $this;
    }


}
