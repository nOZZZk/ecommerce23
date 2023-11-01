<?php

namespace App\Repository;

use App\Entity\CarFeature;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CarFeature>
 *
 * @method CarFeature|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarFeature|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarFeature[]    findAll()
 * @method CarFeature[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarFeatureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarFeature::class);
    }

//    /**
//     * @return CarFeature[] Returns an array of CarFeature objects
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

//    public function findOneBySomeField($value): ?CarFeature
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
