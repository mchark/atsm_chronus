<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 */
class Transaction
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $transId;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $transType;

    /**
     * @var \DateTime
     */
    private $transDate;

    /**
     * @var \DateTime
     */
    private $transTime;

    /**
     * @var Person
     */
    private $person;


    /**
     * @var Attendance
     */
    private $attendance;


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
     * Set transId
     *
     * @param integer $transId
     * @return Transaction
     */
    public function setTransId($transId)
    {
        $this->transId = $transId;

        return $this;
    }

    /**
     * Get transId
     *
     * @return integer 
     */
    public function getTransId()
    {
        return $this->transId;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Transaction
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set transType
     *
     * @param string $transType
     * @return Transaction
     */
    public function setTransType($transType)
    {
        $this->transType = $transType;

        return $this;
    }

    /**
     * Get transType
     *
     * @return string 
     */
    public function getTransType()
    {
        return $this->transType;
    }

    /**
     * Set transDate
     *
     * @param \DateTime $transDate
     * @return Transaction
     */
    public function setTransDate($transDate)
    {
        $this->transDate = $transDate;

        return $this;
    }

    /**
     * Get transDate
     *
     * @return \DateTime 
     */
    public function getTransDate()
    {
        return $this->transDate;
    }

    /**
     * Set transTime
     *
     * @param \DateTime $transTime
     * @return Transaction
     */
    public function setTransTime($transTime)
    {
        $this->transTime = $transTime;

        return $this;
    }

    /**
     * Get transTime
     *
     * @return \DateTime 
     */
    public function getTransTime()
    {
        return $this->transTime;
    }
    /**
     * Set person
     *
     * @param Person $person
     *
     * @return Transaction
     */
    public function setPerson($person)
    {
        $this->person = $person;
        return $this;
    }
    /**
     * Get person
     *
     * @return Person
     */
    public function getPerson()
    {
        return $this->pause;
    }

    /**
     * Set attendance
     *
     * @param Attendance $attendance
     *
     * @return Transaction
     */
    public function setAttendance($attendance)
    {
        $this->attendance = $attendance;
        return $this;
    }
}
