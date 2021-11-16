<?php

namespace App\Repository;

use App\Entity\SalleDeMariage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SalleDeMariage|null find($id, $lockMode = null, $lockVersion = null)
 * @method SalleDeMariage|null findOneBy(array $criteria, array $orderBy = null)
 * @method SalleDeMariage[]    findAll()
 * @method SalleDeMariage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SalleDeMariageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SalleDeMariage::class);
    }

    // /**
    //  * @return SalleDeMariage[] Returns an array of SalleDeMariage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SalleDeMariage
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
