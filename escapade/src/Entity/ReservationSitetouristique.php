<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationSitetouristique
 *
 * @ORM\Table(name="reservation_sitetouristique", indexes={@ORM\Index(name="FK_SiteTouristiqueRservation", columns={"idSiteTouristique"}), @ORM\Index(name="idGuide", columns={"idGuide"}), @ORM\Index(name="IDX_AEC48E3FA455ACCF", columns={"idClient"})})
 * @ORM\Entity
 */
class ReservationSitetouristique
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \Sitetourstique
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Sitetourstique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSiteTouristique", referencedColumnName="id")
     * })
     */
    private $idsitetouristique;

    /**
     * @var \Utilisateur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
     */
    private $idclient;

    /**
     * @var \Guide
     *
     * @ORM\ManyToOne(targetEntity="Guide")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGuide", referencedColumnName="id")
     * })
     */
    private $idguide;

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getIdsitetouristique(): ?Sitetourstique
    {
        return $this->idsitetouristique;
    }

    public function setIdsitetouristique(?Sitetourstique $idsitetouristique): self
    {
        $this->idsitetouristique = $idsitetouristique;

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

    public function getIdguide(): ?Guide
    {
        return $this->idguide;
    }

    public function setIdguide(?Guide $idguide): self
    {
        $this->idguide = $idguide;

        return $this;
    }


}
