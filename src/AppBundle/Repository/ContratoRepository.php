<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 2/05/18
 * Time: 23:11
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class ContratoRepository extends EntityRepository
{
    public function createAlphabeticalQueryBuilder()
    {
        return $this->createQueryBuilder('contrato')
            ->orderBy('contrato.noDeOrden', 'ASC');
    }
}