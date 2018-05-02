<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="factura")
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
     */
    private $programa;
    /**
     * @ORM\Column(type="text")
     */
    private $descripcionDelGasto;
    /**
     * @ORM\Column(type="integer")
     */
    private $cantidad;
    /**
     * @ORM\Column(type="integer")
     */
    private $precio;
    /**
     * @ORM\Column(type="string")
     */
    private $participante;
    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaAt;
    /**
     * @ORM\Column(type="boolean")
     */
    private $isCancelada;
    /**
     * @ORM\Column(type="text")
     */
    private $explicacionPorCancelada;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    private $usuario;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Contrato")
     */
    private $contrato;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Empresa")
     */
    private $empresa;



}