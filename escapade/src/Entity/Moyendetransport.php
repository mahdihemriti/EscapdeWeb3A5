<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moyendetransport
 *
 * @ORM\Table(name="moyendetransport", indexes={@ORM\Index(name="Fk_AgenceMoyen", columns={"idAgence"}), @ORM\Index(name="Fk_MoyenTransportDestination", columns={"idDestination"})})
 * @ORM\Entity
 */
class Moyendetransport
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
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=20, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer", nullable=false)
     */
    private $capacite;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=30, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=0, nullable=false)
     */
    private $status;

    /**
     * @var float
     *
     * @ORM\Column(name="tarifJournee", type="float", precision=10, scale=0, nullable=false)
     */
    private $tarifjournee;

    /**
     * @var \Destination
     *
     * @ORM\ManyToOne(targetEntity="Destination")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDestination", referencedColumnName="id")
     * })
     */
    private $iddestination;

    /**
     * @var \Agencedelocation
     *
     * @ORM\ManyToOne(targetEntity="Agencedelocation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAgence", referencedColumnName="id")
     * })
     */
    private $idagence;


}
