<?php

namespace App\Repository;

use App\Entity\Comments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Comments|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comments|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comments[]    findAll()
 * @method Comments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Comments::class);
    }

    public function findLatest($limit, Comments $comments = null)
    {
        $qb = $this->createQueryBuilder('a');

        $qb
            ->orderBy('a.id', 'DESC')
            ->setMaxResults($limit)
        ;

        if (!is_null($comments)){
            //$qb->andWhere('Identity(a.comments) = ' . $comments->getId());
            $qb
                    ->andWhere('IDENTITY(a.comments) =:comments')
                    ->setParameter('comments', $comments->getId())
                ;
        }


        return $qb->getQuery()->getResult();
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('c')
            ->where('c.something = :value')->setParameter('value', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
