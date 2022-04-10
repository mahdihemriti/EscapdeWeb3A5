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


}
