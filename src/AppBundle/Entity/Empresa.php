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
 * @ORM\Entity
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


}