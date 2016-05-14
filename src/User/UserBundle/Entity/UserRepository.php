<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace User\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

Class UserRepository extends EntityRepository{
    public function findSerieDql($username)
    {
        $query=$this->getEntityManager()
                ->createQuery("select v from UserUserBundle:User v "
                        ."where v.username like :ser")
                ->setParameter('ser','%'.$username.'%');
                    
        return $query->getResult();
   
}
}