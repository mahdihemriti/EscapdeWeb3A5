<?php

namespace App\Repository;

use App\Entity\Moyendetransport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Moyendetransport|null find($id, $lockMode = null, $lockVersion = null)
 * @method Moyendetransport|null findOneBy(array $criteria, array $orderBy = null)
 * @method Moyendetransport[]    findAll()
 * @method Moyendetransport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MoyendetransportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Moyendetransport::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Moyendetransport $entity, bool $flush = true): void
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
    public function remove(Moyendetransport $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
    public function findbyagence($id) {

        return $this->createQueryBuilder('u')
            ->where('u.idAgence = :query')
            ->setParameter('query', $id)
            ->getQuery();
    }
    // /**
    //  * @return Moyendetransport[] Returns an array of Moyendetransport objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Moyendetransport
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
