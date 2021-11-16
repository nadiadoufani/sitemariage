<?php

namespace App\Repository;

use App\Entity\CentreDeBeaute;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CentreDeBeaute|null find($id, $lockMode = null, $lockVersion = null)
 * @method CentreDeBeaute|null findOneBy(array $criteria, array $orderBy = null)
 * @method CentreDeBeaute[]    findAll()
 * @method CentreDeBeaute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CentreDeBeauteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CentreDeBeaute::class);
    }

    // /**
    //  * @return CentreDeBeaute[] Returns an array of CentreDeBeaute objects
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
    public function findOneBySomeField($value): ?CentreDeBeaute
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
