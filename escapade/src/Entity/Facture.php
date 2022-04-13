<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture", indexes={@ORM\Index(name="Fk_ClientFacture", columns={"idClient"}), @ORM\Index(name="Fk_PromoFacture", columns={"idPromotion"})})
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdF", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idf;

    /**
     * @var float
     *
     * @ORM\Column(name="prixTotal", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixtotal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var float
     *
     * @ORM\Column(name="prixFinal", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixfinal;

    /**
     * @var \Promotion
     *
     * @ORM\ManyToOne(targetEntity="Promotion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPromotion", referencedColumnName="id")
     * })
     */
    private $idpromotion;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
     */
    private $idclient;

    public function getIdf(): ?int
    {
        return $this->idf;
    }

    public function getPrixtotal(): ?float
    {
        return $this->prixtotal;
    }

    public function setPrixtotal(float $prixtotal): self
    {
        $this->prixtotal = $prixtotal;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPrixfinal(): ?float
    {
        return $this->prixfinal;
    }

    public function setPrixfinal(float $prixfinal): self
    {
        $this->prixfinal = $prixfinal;

        return $this;
    }

    public function getIdpromotion(): ?Promotion
    {
        return $this->idpromotion;
    }

    public function setIdpromotion(?Promotion $idpromotion): self
    {
        $this->idpromotion = $idpromotion;

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
