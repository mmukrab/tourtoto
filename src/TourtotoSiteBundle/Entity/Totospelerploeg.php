<?php

namespace TourtotoSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Totospelerploeg
 */
class Totospelerploeg
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $reserve;

    /**
     * @var \TourtotoSiteBundle\Entity\Renner
     */
    private $renner;

    /**
     * @var \TourtotoSiteBundle\Entity\Totospeler
     */
    private $totospeler;


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
     * Set reserve
     *
     * @param boolean $reserve
     * @return Totospelerploeg
     */
    public function setReserve($reserve)
    {
        $this->reserve = $reserve;

        return $this;
    }

    /**
     * Get reserve
     *
     * @return boolean 
     */
    public function getReserve()
    {
        return $this->reserve;
    }

    /**
     * Set renner
     *
     * @param \TourtotoSiteBundle\Entity\Renner $renner
     * @return Totospelerploeg
     */
    public function setRenner(\TourtotoSiteBundle\Entity\Renner $renner = null)
    {
        $this->renner = $renner;

        return $this;
    }

    /**
     * Get renner
     *
     * @return \TourtotoSiteBundle\Entity\Renner 
     */
    public function getRenner()
    {
        return $this->renner;
    }

    /**
     * Set totospeler
     *
     * @param \TourtotoSiteBundle\Entity\Totospeler $totospeler
     * @return Totospelerploeg
     */
    public function setTotospeler(\TourtotoSiteBundle\Entity\Totospeler $totospeler = null)
    {
        $this->totospeler = $totospeler;

        return $this;
    }

    /**
     * Get totospeler
     *
     * @return \TourtotoSiteBundle\Entity\Totospeler 
     */
    public function getTotospeler()
    {
        return $this->totospeler;
    }
}
