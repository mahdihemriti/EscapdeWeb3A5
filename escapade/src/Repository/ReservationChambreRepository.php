<?php

namespace App\Repository;

use App\Entity\ReservationChambre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReservationChambre|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationChambre|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationChambre[]    findAll()
 * @method ReservationChambre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationChambreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationChambre::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(ReservationChambre $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(ReservationChambre $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findFreeRoom($idHotel,$typeChambre,$vue,$dateCheckIn,$dateCheckOut): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql="select
      chambre.*
   from
      chambre
         LEFT JOIN 
         ( select 
                 reservation_chambre.idChambre
              from 
                 reservation_chambre,
                 ( select @parmStartDate := :dateCheckIn,
                          @parmEndDate := :dateCheckOut  ) sqlvars 
              where 
                     reservation_chambre.dateAller >= @parmStartDate
                 AND reservation_chambre.dateArrivee <= @parmEndDate
                 AND (  timestampdiff( day, reservation_chambre.dateArrivee, @parmEndDate ) 
                   * timestampdiff( day, @parmStartDate, reservation_chambre.dateAller  )) > 0 ) Occupied
         ON chambre.id = Occupied.idChambre
    where
        chambre.idHotel= :idH 
    and chambre.vueSurMer= :vsm
    and chambre.Type= :typeC
    and
        Occupied.idChambre IS NULL;";
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery(['idH' => $idHotel ,'vsm' => $vue, 'typeC' => $typeChambre, 'dateCheckIn'=> $dateCheckIn , 'dateCheckOut'=> $dateCheckOut]);

        // returns an array of arrays (i.e. a raw data set)
        return $resultSet->fetchAllAssociative();
    }




}
