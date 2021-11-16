<?php

namespace App\Repository;

use App\Entity\Coiffure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Coiffure|null find($id, $lockMode = null, $lockVersion = null)
 * @method Coiffure|null findOneBy(array $criteria, array $orderBy = null)
 * @method Coiffure[]    findAll()
 * @method Coiffure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoiffureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Coiffure::class);
    }

    // /**
    //  * @return Coiffure[] Returns an array of Coiffure objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Coiffure
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
