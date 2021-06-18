<?php

namespace App\Repository;

use App\Entity\HistoricEvents;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HistoricEvents|null find($id, $lockMode = null, $lockVersion = null)
 * @method HistoricEvents|null findOneBy(array $criteria, array $orderBy = null)
 * @method HistoricEvents[]    findAll()
 * @method HistoricEvents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HistoricEventsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HistoricEvents::class);
    }

    public function findHistoricMemoriesEvent(int $day, int $month) {
        return $this->createQueryBuilder('h')
            ->andWhere('DAY(h.dateDeb) = :day')
            ->setParameter('day', $day)
            ->andWhere('MONTH(h.dateDeb) = :month')
            ->setParameter('month', $month)
            ->orderBy('h.importance', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    }

        // /**
        //  * @return HistoricEvents[] Returns an array of HistoricEvents objects
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
        public function findOneBySomeField($value): ?HistoricEvents
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
