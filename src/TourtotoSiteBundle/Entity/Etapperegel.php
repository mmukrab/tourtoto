<?php

namespace TourtotoSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etapperegel
 */
class Etapperegel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $positie;

    /**
     * @var \DateTime
     */
    private $tijd;

    /**
     * @var \TourtotoSiteBundle\Entity\Renner
     */
    private $renner;

    /**
     * @var \TourtotoSiteBundle\Entity\Etappe
     */
    private $etappe;


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
     * Set positie
     *
     * @param integer $positie
     * @return Etapperegel
     */
    public function setPositie($positie)
    {
        $this->positie = $positie;

        return $this;
    }

    /**
     * Get positie
     *
     * @return integer 
     */
    public function getPositie()
    {
        return $this->positie;
    }

    /**
     * Set tijd
     *
     * @param \DateTime $tijd
     * @return Etapperegel
     */
    public function setTijd($tijd)
    {
        $this->tijd = $tijd;

        return $this;
    }

    /**
     * Get tijd
     *
     * @return \DateTime 
     */
    public function getTijd()
    {
        return $this->tijd;
    }

    /**
     * Set renner
     *
     * @param \TourtotoSiteBundle\Entity\Renner $renner
     * @return Etapperegel
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
     * Set etappe
     *
     * @param \TourtotoSiteBundle\Entity\Etappe $etappe
     * @return Etapperegel
     */
    public function setEtappe(\TourtotoSiteBundle\Entity\Etappe $etappe = null)
    {
        $this->etappe = $etappe;

        return $this;
    }

    /**
     * Get etappe
     *
     * @return \TourtotoSiteBundle\Entity\Etappe 
     */
    public function getEtappe()
    {
        return $this->etappe;
    }
}
