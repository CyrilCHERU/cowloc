<?php

namespace App\Repository;

use App\Entity\CommunityMemberships;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;


/**
 * @method Post|null find($id, $lockMode = null, $lockVersion = null)
 * @method Post|null findOneBy(array $criteria, array $orderBy = null)
 * @method Post[] findAll()
 * @method Post[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 * 
 */
class CommunityMembershipsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommunityMemberships::class);
    }
}
