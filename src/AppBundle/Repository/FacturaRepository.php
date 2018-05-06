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
            ->leftJoin('factura.contrato','contrato')
            ->addSelect('contrato')
            ->leftJoin('factura.empresa','empresa')
            ->addSelect('empresa')
            ->orderBy('factura.id', 'ASC')
            ->getQuery()
            ->execute();
    }

    public function findFacturasCanceladas()
    {
        return $this->createQueryBuilder('factura')
            ->andWhere('factura.isCancelada = :isCancelada')
            ->setParameter('isCancelada', true)
            ->leftJoin('factura.contrato','contrato')
            ->addSelect('contrato')
            ->leftJoin('factura.empresa','empresa')
            ->addSelect('empresa')
            ->orderBy('factura.id', 'ASC')
            ->getQuery()
            ->execute()
            ;
    }

    public function findFactura($id)
    {
        return $this->createQueryBuilder('factura')
            ->andWhere('factura.id = :id')
            ->setParameter('id',$id)
            ->leftJoin('factura.contrato','contrato')
            ->addSelect('contrato')
            ->leftJoin('factura.empresa','empresa')
            ->addSelect('empresa')
            ->getQuery()
            ->getOneOrNullResult()
//            ->execute()
            ;
    }

    public function findFacturaConContratoAsociadoEmpresa($facturaEmpresa)
    {
        return $this->createQueryBuilder('factura')
            ->leftJoin('factura.contrato','contrato')
            ->addSelect('contrato')
            ->leftJoin('factura.empresa', 'empresa')
            ->addSelect('empresa')
            ->andWhere('contrato.empresa = :facturaEmpresa')
            ->setParameter('facturaEmpresa', $facturaEmpresa)
            ->andWhere('factura.empresa = :contratoEmpresa')
            ->setParameter('contratoEmpresa',$facturaEmpresa)
            ->getQuery()
            ->getOneOrNullResult()
            ;

    }

//    public function findFacturaConContratoAsociadoEmpresa($facturaEmpresa)
//    {
//        return $this->createQueryBuilder('factura')
//            ->leftJoin('factura.contrato','contrato')
//            ->addSelect('contrato')
//            ->leftJoin('factura.empresa', 'empresa')
//            ->addSelect('empresa')
//            ->andWhere('contrato.empresa = :facturaEmpresa')
//            ->setParameter('facturaEmpresa', $facturaEmpresa)
//            ->andWhere('factura.empresa = :contratoEmpresa')
//            ->setParameter('contratoEmpresa',$facturaEmpresa)
//            ->getQuery()
//            ->execute()
//            ;
//
//    }
}