<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 */
class Person
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $personId;

    /**
     * @var string
     */
    private $cin;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $personType;

    /**
     * @var string
     */
    private $isActive;
    /**
     * @var Attendance
     */
    private $attendances;

    /**
     * @var Transaction
     */
    private $transactions;

    /**
     * @var Person
     */
    private $sub;

    /**
     * @var Person
     */
    private $sup;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set personId
     *
     * @param integer $personId
     * @return Person
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return integer 
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Set cin
     *
     * @param string $cin
     * @return Person
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Person
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Person
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Person
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set personType
     *
     * @param string $personType
     * @return Person
     */
    public function setPersonType($personType)
    {
        $this->personType = $personType;

        return $this;
    }

    /**
     * Get personType
     *
     * @return string 
     */
    public function getPersonType()
    {
        return $this->personType;
    }

    /**
     * Set isActive
     *
     * @param string $isActive
     * @return Person
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return string 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    /**
     * Set attendances
     *
     * @param Attendance $attendances
     *
     * @return Person
     */
    public function setAttendances($attendances)
    {
        $this->attendances = $attendances;
        return $this;
    }
    /**
     * Get attendances
     *
     * @return Attendance
     */
    public function getAttendances()
    {
        return $this->attendances;
    }

    /**
     * Set transactions
     *
     * @param Transaction $transactions
     *
     * @return Person
     */
    public function setTransactions($transactions)
    {
        $this->transactions = $transactions;
        return $this;
    }
    /**
     * Get transactions
     *
     * @return Transaction
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * Set sub
     *
     * @param Collaborator $sub
     *
     * @return Person
     */
    public function setSub($sub)
    {
        $this->sub = $sub;
        return $this;
    }
    /**
     * Get sub
     *
     * @return Collaborator
     */
    public function getSub()
    {
        return $this->sub;
    }

    /**
     * Set sup
     *
     * @param Collaborator $sup
     *
     * @return Person
     */
    public function setSup($sup)
    {
        $this->sup = $sup;
        return $this;
    }
    /**
     * Get sup
     *
     * @return Collaborator
     */
    public function getSup()
    {
        return $this->sup;
    }
}
