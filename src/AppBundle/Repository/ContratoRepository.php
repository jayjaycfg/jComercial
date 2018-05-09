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

    public function findTodosLosContratos()
    {
        return $this->createQueryBuilder('contrato')
            ->leftJoin('contrato.empresa', 'empresa')
            ->addSelect('empresa')
            ->leftJoin('contrato.facturas','facturas')
            ->addSelect('facturas')
            ->getQuery()
            ->execute()
            ;
    }

    public function findContratosConClientes()
    {
        return $this->createQueryBuilder('contrato')
            ->andWhere('contrato.isCliente = :isCliente')
            ->setParameter('isCliente', true)
            ->getQuery()
            ->execute()
            ;
    }

    public function findContratosConProveedores()
    {
        return $this->createQueryBuilder('contrato')
            ->andWhere('contrato.isCliente = :isCliente')
            ->setParameter('isCliente', false)
            ->getQuery()
            ->execute()
            ;
    }
    public function findContratosQueVencenEnTresMeses()
    {
        return $this->createQueryBuilder('contrato')
            ->andWhere('contrato.fechaDeVencimiento < :ThreeMonths')
            ->setParameter('ThreeMonths', new \DateTime('3 months'))
            ->getQuery()
            ->execute()
            ;
    }

    public function findContratosQueVencenEnSeisMeses()
    {
        return $this->createQueryBuilder('contrato')
            ->andWhere('contrato.fechaDeVencimiento < :SixMonths')
            ->setParameter('SixMonths', new \DateTime('6 months'))
            ->getQuery()
            ->execute()
            ;
    }

    public function findContratosPorFechaDeOtorgamiento($fechaOtorgamiento)
    {
        return $this->createQueryBuilder('contrato')
            ->andWhere('contrato.fechaDeOtorgamiento = :fechaOtorgamiento')
            ->setParameter('fechaOtorgamiento', $fechaOtorgamiento)
            ->getQuery()
            ->execute()
            ;
    }

    public function findContratosPorFechaDeVencimiento($fechaVencimiento)
    {
        return $this->createQueryBuilder('contrato')
            ->andWhere('contrato.fechaDeOtorgamiento = :fechaOtorgamiento')
            ->setParameter('fechaOtorgamiento', $fechaVencimiento)
            ->getQuery()
            ->execute()
            ;
    }

    public function findContratosPorEmpresa($nombreEmpresa)
    {
        return $this->createQueryBuilder('contrato')
            ->leftJoin('contrato.empresa','empresa')
            ->addSelect('empresa')
            ->andWhere('empresa.nombre = :nombreEmpresa')
            ->setParameter('nombreEmpresa', $nombreEmpresa)
            ->getQuery()
            ->execute()
            ;
    }

    public function findContratosDelMinem()
    {
        return $this->createQueryBuilder('contrato')
            ->leftJoin('contrato.empresa', 'empresa')
            ->addSelect('empresa')
            ->leftJoin('contrato.facturas', 'facturas')
            ->addSelect('facturas')
            ->andWhere('contrato.ministerio LIKE :ministerio')
            ->setParameter('ministerio', 'MINEM')
            ->getQuery()
            ->execute();
    }

    public function findContratosFueraDelMinem()
    {
        return $this->createQueryBuilder('contrato')
            ->leftJoin('contrato.empresa', 'empresa')
            ->addSelect('empresa')
            ->leftJoin('contrato.facturas', 'facturas')
            ->addSelect('facturas')
            ->andWhere('contrato.ministerio != :ministerio')
            ->setParameter('ministerio', 'MINEM')
            ->getQuery()
            ->execute();
    }
}
