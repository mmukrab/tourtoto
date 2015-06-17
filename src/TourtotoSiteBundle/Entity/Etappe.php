<?php

namespace TourtotoSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etappe
 */
class Etappe
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $naam;

    /**
     * @var integer
     */
    private $afstand;


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
     * Set naam
     *
     * @param string $naam
     * @return Etappe
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
     * Set afstand
     *
     * @param integer $afstand
     * @return Etappe
     */
    public function setAfstand($afstand)
    {
        $this->afstand = $afstand;

        return $this;
    }

    /**
     * Get afstand
     *
     * @return integer 
     */
    public function getAfstand()
    {
        return $this->afstand;
    }
}
