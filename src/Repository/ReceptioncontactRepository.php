<?php

namespace App\Repository;

use App\Entity\Receptioncontact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Receptioncontact>
 *
 * @method Receptioncontact|null find($id, $lockMode = null, $lockVersion = null)
 * @method Receptioncontact|null findOneBy(array $criteria, array $orderBy = null)
 * @method Receptioncontact[]    findAll()
 * @method Receptioncontact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReceptioncontactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Receptioncontact::class);
    }

//    /**
//     * @return Receptioncontact[] Returns an array of Receptioncontact objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Receptioncontact
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
