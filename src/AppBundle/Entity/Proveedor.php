<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 29/04/18
 * Time: 23:36
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="proveedor")
 */
class Proveedor
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
    private $contratNumber;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Campo Obligatorio")
     */
    private $numberAccount;
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

    public function getId()
    {
        return $this->id;
    }

    public function getContratNumber()
    {
        return $this->contratNumber;
    }

    public function setContratNumber($contratNumber)
    {
        $this->contratNumber = $contratNumber;
    }

    public function getNumberAccount()
    {
        return $this->numberAccount;
    }

    public function setNumberAccount($numberAccount)
    {
        $this->numberAccount = $numberAccount;
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


}