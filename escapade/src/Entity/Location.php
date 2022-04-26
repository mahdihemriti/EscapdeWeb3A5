<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location", indexes={@ORM\Index(name="FK_MoyenTransportLocation", columns={"idMoyenTransport"}), @ORM\Index(name="FK_ClientLocation", columns={"idClient"})})
 * @ORM\Entity
 */
class Location
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
     * @ORM\Column(name="datePrise", type="date", nullable=false)
     */
    private $dateprise;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRetour", type="date", nullable=false)
     */
    private $dateretour;

    /**
     * @var \Moyendetransport
     *
     * @ORM\ManyToOne(targetEntity="Moyendetransport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMoyenTransport", referencedColumnName="id")
     * })
     */
    private $idmoyentransport;

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

    public function getDateprise(): ?\DateTimeInterface
    {
        return $this->dateprise;
    }

    public function setDateprise(\DateTimeInterface $dateprise): self
    {
        $this->dateprise = $dateprise;

        return $this;
    }

    public function getDateretour(): ?\DateTimeInterface
    {
        return $this->dateretour;
    }

    public function setDateretour(\DateTimeInterface $dateretour): self
    {
        $this->dateretour = $dateretour;

        return $this;
    }

    public function getIdmoyentransport(): ?Moyendetransport
    {
        return $this->idmoyentransport;
    }

    public function setIdmoyentransport(?Moyendetransport $idmoyentransport): self
    {
        $this->idmoyentransport = $idmoyentransport;

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
