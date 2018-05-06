<?php
/**
 * Created by PhpStorm.
 * User: cnci
 * Date: 2/05/18
 * Time: 15:03
 */

namespace AppBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmpresaRepository")
 * @ORM\Table(name="empresa")
 */
class Empresa
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
    private $nombre;
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $domicilioLegal;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Contrato", mappedBy="empresa")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $contratos;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Factura", mappedBy="empresa")
     */
    private $facturas;

    public function __construct()
    {
        $this->contratos = new ArrayCollection();
    }


    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getDomicilioLegal()
    {
        return $this->domicilioLegal;
    }

    public function setDomicilioLegal($domicilioLegal)
    {
        $this->domicilioLegal = $domicilioLegal;
    }


    /**
     * @return ArrayCollection|Contrato[]
     */
    public function getContratos()
    {
        return $this->contratos;
    }

    public function setContratos($contrato)
    {
        $this->contratos [] = $contrato;
    }

    /**
     * @return ArrayCollection|Factura[]
     */
    public function getFacturas()
    {
        return $this->facturas;
    }

    public function setFacturas($facturas)
    {
        $this->facturas = $facturas;
    }


    public function __toString()
    {
        return $this->getNombre();
    }

}