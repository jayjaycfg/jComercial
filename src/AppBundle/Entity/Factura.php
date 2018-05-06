<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FacturaRepository")
 * @ORM\Table(name="factura")
 *
 */
class Factura
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $programa;
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $descripcionDelGasto;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $cantidad;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $precio;
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $participante;
    /**
     * @ORM\Column(type="datetime")
     *
     */
    private $fechaAt;
    /**
     * @ORM\Column(type="boolean")
     */
    private $isCancelada = false;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $explicacionPorCancelada = null;
    /**
     * @ORM\Column(type="string")
     *
     */
    private $usuario;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Contrato", inversedBy="facturas")
     *@Assert\NotBlank(message="Campo Obligatorio")
     */
    private $contrato;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Empresa", inversedBy="facturas")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $empresa;

    public function getId()
    {
        return $this->id;
    }

    public function getPrograma()
    {
        return $this->programa;
    }

    public function setPrograma($programa)
    {
        $this->programa = $programa;
    }

    public function getDescripcionDelGasto()
    {
        return $this->descripcionDelGasto;
    }

    public function setDescripcionDelGasto($descripcionDelGasto)
    {
        $this->descripcionDelGasto = $descripcionDelGasto;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function getParticipante()
    {
        return $this->participante;
    }

    public function setParticipante($participante)
    {
        $this->participante = $participante;
    }

    public function getFechaAt()
    {
        return $this->fechaAt;
    }

    public function setFechaAt($fechaAt)
    {
        $this->fechaAt = $fechaAt;
    }

    public function getisCancelada()
    {
        return $this->isCancelada;
    }

    public function setIsCancelada($isCancelada)
    {
        $this->isCancelada = $isCancelada;
    }

    public function getExplicacionPorCancelada()
    {
        return $this->explicacionPorCancelada;
    }

    public function setExplicacionPorCancelada($explicacionPorCancelada)
    {
        $this->explicacionPorCancelada = $explicacionPorCancelada;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getContrato()
    {
        return $this->contrato;
    }

    public function setContrato(Contrato $contrato)
    {
            $this->contrato = $contrato;
    }

    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function setEmpresa(Empresa $empresa)
    {
        $this->empresa = $empresa;
    }



}