<?php
/**
 * Created by PhpStorm.
 * User: cnci
 * Date: 2/05/18
 * Time: 15:06
 */

namespace AppBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contrato")
 */
class Contrato
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="integer")
     */
    private $noDeOrden;
    /**
     * @ORM\Column(type="json_array")
     */
    private $tipoDeContrato = [];
    /**
     * @ORM\Column(type="integer")
     */
    private $valorInicialMn;
    /**
     * @ORM\Column(type="integer")
     */
    private $valorInicialCuc;
    /**
     * @ORM\Column(type="boolean")
     */
    private $isSuplemento;
    /**
     * @ORM\Column(type="string")
     */
    private $actaDeFirmado;
    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaDeOtorgamiento;
    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaDeVencimiento;
    /**
     * @ORM\Column(type="integer")
     */
    private $telefono;
    /**
     * @ORM\Column(type="string")
     */
    private $correo;
    /**
     * @ORM\Column(type="boolean")
     */
    private $isCliente;
    /**
     * @ORM\Column(type="boolean")
     */
    private $isProveedor;
    /**
     * @ORM\Column(type="json_array")
     */
    private $ministerio = [];
    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Empresa")
     */
    private $empresas;

    public function __construct()
    {
            $this->empresas = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }

    public function getNoDeOrden()
    {
        return $this->noDeOrden;
    }

    public function setNoDeOrden($noDeOrden)
    {
        $this->noDeOrden = $noDeOrden;
    }

    public function getTipoDeContrato()
    {
        return $this->tipoDeContrato;
    }

    public function setTipoDeContrato($tipoDeContrato)
    {
        $this->tipoDeContrato = $tipoDeContrato;
    }

    public function getValorInicialMn()
    {
        return $this->valorInicialMn;
    }

    public function setValorInicialMn($valorInicialMn)
    {
        $this->valorInicialMn = $valorInicialMn;
    }

    public function getValorInicialCuc()
    {
        return $this->valorInicialCuc;
    }

    public function setValorInicialCuc($valorInicialCuc)
    {
        $this->valorInicialCuc = $valorInicialCuc;
    }

    public function getisSuplemento()
    {
        return $this->isSuplemento;
    }

    public function setIsSuplemento($isSuplemento)
    {
        $this->isSuplemento = $isSuplemento;
    }

    public function getActaDeFirmado()
    {
        return $this->actaDeFirmado;
    }

    public function setActaDeFirmado($actaDeFirmado)
    {
        $this->actaDeFirmado = $actaDeFirmado;
    }

    public function getFechaDeOtorgamiento()
    {
        return $this->fechaDeOtorgamiento;
    }

    public function setFechaDeOtorgamiento($fechaDeOtorgamiento)
    {
        $this->fechaDeOtorgamiento = $fechaDeOtorgamiento;
    }

    public function getFechaDeVencimiento()
    {
        return $this->fechaDeVencimiento;
    }

    public function setFechaDeVencimiento($fechaDeVencimiento)
    {
        $this->fechaDeVencimiento = $fechaDeVencimiento;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getisCliente()
    {
        return $this->isCliente;
    }

    public function setIsCliente($isCliente)
    {
        $this->isCliente = $isCliente;
    }

    public function getisProveedor()
    {
        return $this->isProveedor;
    }

    public function setIsProveedor($isProveedor)
    {
        $this->isProveedor = $isProveedor;
    }

    public function getMinisterio()
    {
        return $this->ministerio;
    }

    public function setMinisterio($ministerio)
    {
        $this->ministerio = $ministerio;
    }



}