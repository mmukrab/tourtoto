<?php

namespace TourtotoSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Totospeler
 */
class Totospeler
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $naam;


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
     * @return Totospeler
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
}
