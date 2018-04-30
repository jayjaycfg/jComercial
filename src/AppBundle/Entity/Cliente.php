<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="cliente")
 */
class Cliente
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $clientNumber;
    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $startAt;
    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $endAt;
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $fact = false;

    public function getId()
    {
        return $this->id;
    }

    public function getClientNumber()
    {

        return $this->clientNumber;

    }

    public function setClientNumber($clientNumber)
    {
        $this->clientNumber = $clientNumber;

       // $clientNumber = trim( $this->clientNumber.' '.$this->getStartAt());
        return $this->clientNumber;

        //return $clientNumber;
    }

    public function getStartAt()
    {
        return $this->startAt;
    }

    public function setStartAt($startAt)
    {
        $this->startAt = $startAt;
    }

    public function getEndAt()
    {
        return $this->endAt;
    }

    public function setEndAt($endAt)
    {
        $this->endAt = $endAt;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getFact()
    {
        return $this->fact;
    }

    public function setFact($fact)
    {
        $this->fact = $fact;
    }



}