<?php

namespace App\Repository;

use App\Entity\Traiteurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Traiteurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Traiteurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Traiteurs[]    findAll()
 * @method Traiteurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TraiteursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Traiteurs::class);
    }

    // /**
    //  * @return Traiteurs[] Returns an array of Traiteurs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Traiteurs
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
