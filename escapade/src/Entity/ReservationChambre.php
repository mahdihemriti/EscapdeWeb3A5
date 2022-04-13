<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationChambre
 *
 * @ORM\Table(name="reservation_chambre", indexes={@ORM\Index(name="Fk_chambreReservationChambre", columns={"idChambre"}), @ORM\Index(name="Fk_ClientReservationChambre", columns={"idClient"})})
 * @ORM\Entity
 */
class ReservationChambre
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateArrivee", type="date", nullable=false)
     */
    private $datearrivee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAller", type="date", nullable=false)
     */
    private $datealler;

    /**
     * @var \Chambre
     *
     * @ORM\ManyToOne(targetEntity="Chambre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idChambre", referencedColumnName="id")
     * })
     */
    private $idchambre;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
     */
    private $idclient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatearrivee(): ?\DateTimeInterface
    {
        return $this->datearrivee;
    }

    public function setDatearrivee(\DateTimeInterface $datearrivee): self
    {
        $this->datearrivee = $datearrivee;

        return $this;
    }

    public function getDatealler(): ?\DateTimeInterface
    {
        return $this->datealler;
    }

    public function setDatealler(\DateTimeInterface $datealler): self
    {
        $this->datealler = $datealler;

        return $this;
    }

    public function getIdchambre(): ?Chambre
    {
        return $this->idchambre;
    }

    public function setIdchambre(?Chambre $idchambre): self
    {
        $this->idchambre = $idchambre;

        return $this;
    }

    public function getIdclient(): ?Utilisateur
    {
        return $this->idclient;
    }

    public function setIdclient(?Utilisateur $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }


}
