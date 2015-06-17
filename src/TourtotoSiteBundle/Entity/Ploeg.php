<?php

namespace TourtotoSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ploeg
 */
class Ploeg
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $naam;

    /**
     * @var \TourtotoSiteBundle\Entity\Land
     */
    private $land;


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
     * Set code
     *
     * @param string $code
     * @return Ploeg
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set naam
     *
     * @param string $naam
     * @return Ploeg
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string 
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Set land
     *
     * @param \TourtotoSiteBundle\Entity\Land $land
     * @return Ploeg
     */
    public function setLand(\TourtotoSiteBundle\Entity\Land $land = null)
    {
        $this->land = $land;

        return $this;
    }

    /**
     * Get land
     *
     * @return \TourtotoSiteBundle\Entity\Land 
     */
    public function getLand()
    {
        return $this->land;
    }
}
