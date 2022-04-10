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
     * @var \Guide
     *
     * @ORM\ManyToOne(targetEntity="Guide")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGuide", referencedColumnName="id")
     * })
     */
    private $idguide;

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


}
