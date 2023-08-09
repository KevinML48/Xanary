<?php

namespace App\Repository;

use App\Entity\Contact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Contact>
 *
 * @method Contact|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contact|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contact[]    findAll()
 * @method Contact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contact::class);
    }

    // Ajoute la méthode pour récupérer les choix distincts depuis la base de données
    public function findDistinctChoices()
    {
        return [
            'poles' => $this->createQueryBuilder('c')
                ->select('DISTINCT c.poles')
                ->getQuery()
                ->getResult(),

            'equipe' => $this->createQueryBuilder('c')
                ->select('DISTINCT c.equipe')
                ->getQuery()
                ->getResult(),

            'roles' => $this->createQueryBuilder('c')
                ->select('DISTINCT c.roles')
                ->getQuery()
                ->getResult(),

            'reseaux' => $this->createQueryBuilder('c')
                ->select('DISTINCT c.reseaux')
                ->getQuery()
                ->getResult(),
        ];
    }

//    /**
//     * @return Contact[] Returns an array of Contact objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Contact
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
