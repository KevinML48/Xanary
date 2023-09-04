<?php

namespace App\Repository;

use App\Entity\Equipevlrt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Equipevlrt>
 *
 * @method Equipevlrt|null find($id, $lockMode = null, $lockVersion = null)
 * @method Equipevlrt|null findOneBy(array $criteria, array $orderBy = null)
 * @method Equipevlrt[]    findAll()
 * @method Equipevlrt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EquipevlrtRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Equipevlrt::class);
    }

//    /**
//     * @return Equipevlrt[] Returns an array of Equipevlrt objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Equipevlrt
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
