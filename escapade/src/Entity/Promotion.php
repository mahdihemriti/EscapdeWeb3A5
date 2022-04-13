<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity
 */
class Promotion
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
     * @var float
     *
     * @ORM\Column(name="taux", type="float", precision=10, scale=0, nullable=false)
     */
    private $taux;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date", nullable=false)
     */
    private $datefin;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Promotion
     */
    public function setId(int $id): Promotion
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaux(): float
    {
        return $this->taux;
    }

    /**
     * @param float $taux
     * @return Promotion
     */
    public function setTaux(float $taux): Promotion
    {
        $this->taux = $taux;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatedebut(): \DateTime
    {
        return $this->datedebut;
    }

    /**
     * @param \DateTime $datedebut
     * @return Promotion
     */
    public function setDatedebut(\DateTime $datedebut): Promotion
    {
        $this->datedebut = $datedebut;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatefin(): \DateTime
    {
        return $this->datefin;
    }

    /**
     * @param \DateTime $datefin
     * @return Promotion
     */
    public function setDatefin(\DateTime $datefin): Promotion
    {
        $this->datefin = $datefin;
        return $this;
    }



}
