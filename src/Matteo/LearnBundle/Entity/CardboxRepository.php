<?php

namespace Matteo\LearnBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CardboxRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CardboxRepository extends EntityRepository
{
    public function findAllPublicCardboxes() 
    {
        return $this->getEntityManager()
                    ->createQuery('SELECT p FROM MatteoLearnBundle:Cardbox p WHERE p.is_private is NULL')
                    ->getResult();
    }
}
