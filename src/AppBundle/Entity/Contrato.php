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
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContratoRepository")
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
     * @ORM\Column(type="string", nullable= false, unique=true)
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $noDeOrden;
    /**
     * @ORM\Column(type="string")
     *@Assert\NotBlank(message="Campo Obligatorio")
     */
    private $tipoDeContrato = [];


    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Campo Obligatorio")
     *@Assert\Range(min="0", minMessage="No inserte valores negativos")
     */
    private $valorInicialMn = 0 ;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Campo Obligatorio")
     * @Assert\Range(min="0", minMessage="No inserte valores negativos")
     */
    private $valorInicialCuc = 0;
    /**
     * @ORM\Column(type="boolean")
     *
     */
    private $isSuplemento = false;
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $actaDeFirmado;
    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $fechaDeOtorgamiento;
    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $fechaDeVencimiento;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $telefono;
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Campo Obligatorio")
     * @Assert\Email(message="Inserte una direccion de correo valida")
     */
    private $correo;
    /**
     * @ORM\Column(type="boolean", nullable= false)
     *
     */
    private $isCliente = true;
    /**
     * @ORM\Column(type="boolean", nullable=false)
     *
     */
    private $isProveedor = false;
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $ministerio = [];

    private $isClienteOrProveedor;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Empresa", inversedBy="contratos")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $empresa;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Factura", mappedBy="contrato")
     *
     */
    private $facturas;

    public function __construct()
    {
        $this->facturas = new ArrayCollection();
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
        if($this->getFechaDeOtorgamiento() != $fechaDeVencimiento && $this->getFechaDeOtorgamiento()< $fechaDeVencimiento)
        {
            $this->fechaDeVencimiento = $fechaDeVencimiento;

        }
        return null;
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

    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }
    /** @return  ArrayCollection|Factura[] */
    public function getFacturas()
    {
        return $this->facturas;
    }

    public function setFacturas(Factura $facturas)
    {
        $this->facturas = $facturas;
    }

    public function getisClienteOrProveedor()
    {
        if($this->getisCliente() == true)
        {
            $this->setIsClienteOrProveedor(0);
        }else{
            $this->setIsClienteOrProveedor(1);
        }


        return $this->isClienteOrProveedor;
    }

    public function setIsClienteOrProveedor($isClienteOrProveedor)
    {
        $this->isClienteOrProveedor = $isClienteOrProveedor;
    }



    public function __toString()
    {
        return $this->getNoDeOrden();
    }

}