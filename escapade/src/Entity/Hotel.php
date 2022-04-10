<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel", indexes={@ORM\Index(name="FK_HotelDestination", columns={"idDestination"})})
 * @ORM\Entity
 */
class Hotel
{
    /**
     * @var int
     *
     * @ORM\Column(name="idHotel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhotel;

    /**
     * @var string
     *
     * @ORM\Column(name="matriculeFiscale", type="string", length=20, nullable=false)
     */
    private $matriculefiscale;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrEtoile", type="integer", nullable=false)
     */
    private $nbretoile;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=80, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="nbChambreTotal", type="integer", nullable=false)
     */
    private $nbchambretotal;

    /**
     * @var int
     *
     * @ORM\Column(name="maxChambre", type="integer", nullable=false)
     */
    private $maxchambre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imgHotel", type="string", length=255, nullable=true)
     */
    private $imghotel;

    /**
     * @var \Destination
     *
     * @ORM\ManyToOne(targetEntity="Destination")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDestination", referencedColumnName="id")
     * })
     */
    private $iddestination;


}
