<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\MoyendetransportRepository;

/**
 * @ORM\Entity(repositoryClass=MoyendetransportRepository::class)
 * @ORM\Table(name="moyendetransport", indexes={@ORM\Index(name="Fk_AgenceMoyen", columns={"idAgence"})})
 */
class Moyendetransport
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
     * @ORM\Column(name="libelle", type="string", length=20, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer", nullable=false)
     */
    private $capacite;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=30, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=false)
     */
    private $image;

    /**
     * @var float
     *
     * @ORM\Column(name="tarifJourne", type="float", precision=10, scale=0, nullable=false)
     */
    private $tarifjourne;



    /**
     *
     * @ORM\ManyToOne(targetEntity="Agencedelocation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAgence", referencedColumnName="id")
     * })
     */
    private $idagence;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): self
    {
        $this->capacite = $capacite;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }


    public function getIdagence(): ?Agencedelocation
    {
        return $this->idagence;

    }

    public function setIdagence(?Agencedelocation $idagence): self
    {
        $this->idagence = $idagence;

        return $this;
    }

    public function getTarifjourne(): ?float
    {
        return $this->tarifjourne;
    }

    public function setTarifjourne(float $tarifjourne): self
    {
        $this->tarifjourne = $tarifjourne;

        return $this;
    }




}
