<?php

namespace TourtotoSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Renner
 */
class Renner
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $voornaam;

    /**
     * @var string
     */
    private $achternaam;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var \TourtotoSiteBundle\Entity\Land
     */
    private $land;

    /**
     * @var \TourtotoSiteBundle\Entity\Ploeg
     */
    private $ploeg;


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
     * Set voornaam
     *
     * @param string $voornaam
     * @return Renner
     */
    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;

        return $this;
    }

    /**
     * Get voornaam
     *
     * @return string 
     */
    public function getVoornaam()
    {
        return $this->voornaam;
    }

    /**
     * Set achternaam
     *
     * @param string $achternaam
     * @return Renner
     */
    public function setAchternaam($achternaam)
    {
        $this->achternaam = $achternaam;

        return $this;
    }

    /**
     * Get achternaam
     *
     * @return string 
     */
    public function getAchternaam()
    {
        return $this->achternaam;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Renner
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set land
     *
     * @param \TourtotoSiteBundle\Entity\Land $land
     * @return Renner
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

    /**
     * Set ploeg
     *
     * @param \TourtotoSiteBundle\Entity\Ploeg $ploeg
     * @return Renner
     */
    public function setPloeg(\TourtotoSiteBundle\Entity\Ploeg $ploeg = null)
    {
        $this->ploeg = $ploeg;

        return $this;
    }

    /**
     * Get ploeg
     *
     * @return \TourtotoSiteBundle\Entity\Ploeg 
     */
    public function getPloeg()
    {
        return $this->ploeg;
    }
}
