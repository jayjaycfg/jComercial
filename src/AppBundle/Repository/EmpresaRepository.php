<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 2/05/18
 * Time: 23:13
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class EmpresaRepository extends EntityRepository
{
    public function createAlphabeticalQueryBuilder()
    {
        return $this->createQueryBuilder('empresa')
            ->orderBy('empresa.nombre', 'ASC');
    }
}