<?php

namespace App\Repository;

use App\Entity\SpecialitesEleve;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SpecialitesEleve|null find($id, $lockMode = null, $lockVersion = null)
 * @method SpecialitesEleve|null findOneBy(array $criteria, array $orderBy = null)
 * @method SpecialitesEleve[]    findAll()
 * @method SpecialitesEleve[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpecialitesEleveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SpecialitesEleve::class);
    }

    // /**
    //  * @return SpecialitesEleve[] Returns an array of SpecialitesEleve objects
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
    public function findOneBySomeField($value): ?SpecialitesEleve
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
