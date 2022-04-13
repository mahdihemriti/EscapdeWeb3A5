<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sitetourstique
 *
 * @ORM\Table(name="sitetourstique", indexes={@ORM\Index(name="FK_SiteTouristiqueDestination", columns={"idDestination"}), @ORM\Index(name="Fk_GuideSiteTouristique", columns={"idGuide"})})
 * @ORM\Entity
 */
class Sitetourstique
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=20, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=30, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var \Guide
     *
     * @ORM\ManyToOne(targetEntity="Guide")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGuide", referencedColumnName="id")
     * })
     */
    private $idguide;

    /**
     * @var \Destination
     *
     * @ORM\ManyToOne(targetEntity="Destination")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDestination", referencedColumnName="id")
     * })
     */
    private $iddestination;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getIdguide(): ?Guide
    {
        return $this->idguide;
    }

    public function setIdguide(?Guide $idguide): self
    {
        $this->idguide = $idguide;

        return $this;
    }

    public function getIddestination(): ?Destination
    {
        return $this->iddestination;
    }

    public function setIddestination(?Destination $iddestination): self
    {
        $this->iddestination = $iddestination;

        return $this;
    }


}
