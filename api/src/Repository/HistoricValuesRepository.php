<?php

namespace App\Repository;

use App\Entity\HistoricValues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HistoricValues|null find($id, $lockMode = null, $lockVersion = null)
 * @method HistoricValues|null findOneBy(array $criteria, array $orderBy = null)
 * @method HistoricValues[]    findAll()
 * @method HistoricValues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HistoricValuesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HistoricValues::class);
    }

    public function findHistoricbyValue(int $id) {
        return $this->createQueryBuilder('h')
            ->andWhere('h.idHistoric = :id')
            ->setParameter('id', $id)
            ->orderBy('h.valeur', 'ASC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    }


    // /**
    //  * @return HistoricValues[] Returns an array of HistoricValues objects
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
    public function findOneBySomeField($value): ?HistoricValues
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
