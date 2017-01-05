<?php

namespace AppBundle\Entity;

/**
 * Payment
 */
class Payment
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $productName;

    /**
     * @var string
     */
    private $status;

    /**
     * @var bool
     */
    private $confirmationSent;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Payment
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
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Payment
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set productName
     *
     * @param string $productName
     *
     * @return Payment
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Payment
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set confirmationSent
     *
     * @param boolean $confirmationSent
     *
     * @return Payment
     */
    public function setConfirmationSent($confirmationSent)
    {
        $this->confirmationSent = $confirmationSent;

        return $this;
    }

    /**
     * Get confirmationSent
     *
     * @return bool
     */
    public function getConfirmationSent()
    {
        return $this->confirmationSent;
    }
    /**
     * @var \AppBundle\Entity\Baptem
     */
    private $baptem;


    /**
     * Set baptem
     *
     * @param \AppBundle\Entity\Baptem $baptem
     *
     * @return Payment
     */
    public function setBaptem(\AppBundle\Entity\Baptem $baptem = null)
    {
        $this->baptem = $baptem;

        return $this;
    }

    /**
     * Get baptem
     *
     * @return \AppBundle\Entity\Baptem
     */
    public function getBaptem()
    {
        return $this->baptem;
    }
}
