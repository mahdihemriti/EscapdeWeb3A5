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


}
