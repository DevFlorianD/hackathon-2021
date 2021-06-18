<?php

namespace App\Repository;

use App\Entity\ClimatoJournaliere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClimatoJournaliere|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClimatoJournaliere|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClimatoJournaliere[]    findAll()
 * @method ClimatoJournaliere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClimatoJournaliereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClimatoJournaliere::class);
    }

    // /**
    //  * @return ClimatoJournaliere[] Returns an array of ClimatoJournaliere objects
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
    public function findOneBySomeField($value): ?ClimatoJournaliere
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
