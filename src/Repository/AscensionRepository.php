<?php

namespace App\Repository;

use App\Entity\Ascension;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ascension>
 *
 * @method Ascension|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ascension|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ascension[]    findAll()
 * @method Ascension[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AscensionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ascension::class);
    }

//    /**
//     * @return Ascension[] Returns an array of Ascension objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Ascension
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
