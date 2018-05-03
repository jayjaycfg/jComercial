<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 2/05/18
 * Time: 23:14
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function createAlphabeticalQueryBuilder()
    {
        return $this->createQueryBuilder('user')
            ->orderBy('user.name', 'ASC');
    }
}