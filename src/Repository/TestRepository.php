<?php

namespace DarkSide\Testmodule\Repository;

use DarkSide\Testmodule\Entity\Test;
use Doctrine\ORM\EntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Test|null find($id, $lockMode = null, $lockVersion = null)
 * @method Test|null findOneBy(array $criteria, array $orderBy = null)
 * @method Test[]    findAll()
 * @method Test[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestRepository extends EntityRepository
{
    protected $_entityName = 'Test';
    protected $_em;
    protected $_class;

    public function __construct(EntityManagerInterface $em, Mapping\ClassMetadata $class)    {        
        $this->_entityName = $class->name;        
        $this->_em = $em;
        $this->_class = $class;    
    }

    // /**
    //  * @return Test[] Returns an array of Test objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Test
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
