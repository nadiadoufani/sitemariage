<?php

namespace App\Repository;

use App\Entity\VoyageDeNoce;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VoyageDeNoce|null find($id, $lockMode = null, $lockVersion = null)
 * @method VoyageDeNoce|null findOneBy(array $criteria, array $orderBy = null)
 * @method VoyageDeNoce[]    findAll()
 * @method VoyageDeNoce[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoyageDeNoceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VoyageDeNoce::class);
    }

    // /**
    //  * @return VoyageDeNoce[] Returns an array of VoyageDeNoce objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VoyageDeNoce
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
