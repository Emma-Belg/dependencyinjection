<?php

namespace App\Repository;

use App\Entity\LearningInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LearningInterface|null find($id, $lockMode = null, $lockVersion = null)
 * @method LearningInterface|null findOneBy(array $criteria, array $orderBy = null)
 * @method LearningInterface[]    findAll()
 * @method LearningInterface[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LearningInterfaceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LearningInterface::class);
    }

    // /**
    //  * @return LearningInterface[] Returns an array of LearningInterface objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LearningInterface
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
