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

    /**
     * @return int
     */
    public function getIdf(): int
    {
        return $this->idf;
    }

    /**
     * @param int $idf
     * @return Facture
     */
    public function setIdf(int $idf): Facture
    {
        $this->idf = $idf;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrixtotal(): float
    {
        return $this->prixtotal;
    }

    /**
     * @param float $prixtotal
     * @return Facture
     */
    public function setPrixtotal(float $prixtotal): Facture
    {
        $this->prixtotal = $prixtotal;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return Facture
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrixfinal(): float
    {
        return $this->prixfinal;
    }

    /**
     * @param float $prixfinal
     * @return Facture
     */
    public function setPrixfinal(float $prixfinal): Facture
    {
        $this->prixfinal = $prixfinal;
        return $this;
    }

    /**
     * @return \Promotion
     */
    public function getIdpromotion(): \Promotion
    {
        return $this->idpromotion;
    }

    /**
     * @param \Promotion $idpromotion
     * @return Facture
     */
    public function setIdpromotion(\Promotion $idpromotion): Facture
    {
        $this->idpromotion = $idpromotion;
        return $this;
    }

    /**
     * @return \Utilisateur
     */
    public function getIdclient(): \Utilisateur
    {
        return $this->idclient;
    }

    /**
     * @param \Utilisateur $idclient
     * @return Facture
     */
    public function setIdclient(\Utilisateur $idclient): Facture
    {
        $this->idclient = $idclient;
        return $this;
    }


}
