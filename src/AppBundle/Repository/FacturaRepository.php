<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class FacturaRepository  extends EntityRepository
{
    public function createAlphabeticalQueryBuilder()
    {
        return $this->createQueryBuilder('factura')
            ->orderBy('factura.id', 'ASC');
    }

    public function findFacturasSinCancelar()
    {
        return $this->createQueryBuilder('factura')
            ->andWhere('factura.isCancelada = :isCancelada')
            ->setParameter('isCancelada', false)
            ->orderBy('factura.id', 'ASC')
            ->getQuery()
            ->execute();
    }

    public function findFacturasCanceladas()
    {
        return $this->createQueryBuilder('factura')
            ->andWhere('factura.isCancelada = :isCancelada')
            ->setParameter('isCancelada', true)
            ->orderBy('factura.id', 'ASC')
            ->getQuery()
            ->execute();
    }
}