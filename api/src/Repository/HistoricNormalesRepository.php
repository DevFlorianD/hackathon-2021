<?php

namespace App\Repository;

use App\Entity\HistoricNormales;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HistoricNormales|null find($id, $lockMode = null, $lockVersion = null)
 * @method HistoricNormales|null findOneBy(array $criteria, array $orderBy = null)
 * @method HistoricNormales[]    findAll()
 * @method HistoricNormales[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HistoricNormalesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HistoricNormales::class);
    }

    // /**
    //  * @return HistoricNormales[] Returns an array of HistoricNormales objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HistoricNormales
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
