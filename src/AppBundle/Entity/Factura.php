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
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $importeCup;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $importeCuc;

    private $contratos = [];

//    public function __construct()
//    {
//        $this->contratos = new ArrayCollection();
//    }

    public function getId()
    {
        return $this->id;
    }

    public function getImporteCup()
    {
        return $this->importeCup;
    }

    public function setImporteCup($importeCup)
    {
        $this->importeCup = $importeCup;
    }

    public function getImporteCuc()
    {
        return $this->importeCuc;
    }

    public function setImporteCuc($importeCuc)
    {
        $this->importeCuc = $importeCuc;
    }

    public function getContratos()
    {
        return $this->contratos;
    }


    public function setContratos($contratos)
    {
        $this->contratos = $contratos;
    }

}