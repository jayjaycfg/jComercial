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
     */
    private $nombre;
    /**
     * @ORM\Column(type="text")
     */
    private $domicilioLegal;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Contrato", mappedBy="empresas")
     */
    private $contratos;

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

    public function setContratos($contratos)
    {
        $this->contratos = $contratos;
    }

    public function addContrato(Contrato $contrato)
    {
        if($this->contratos->contains($contrato)){
            return null;
        }
        $this->contratos[] = $contrato;
    }

    public function removeContrato(Contrato $contrato)
    {
        $this->contratos->removeElement($contrato);
    }

    public function __toString()
    {
        return $this->getNombre();
    }

}