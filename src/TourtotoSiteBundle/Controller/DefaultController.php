<?php

namespace TourtotoSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


//@route("/")
class DefaultController extends Controller
{
    public $object = "Renner";
    public function indexAction()
    {
        return $this->render('TourtotoSiteBundle:Default:index.html.twig');
    }
    
    /*
     * @route(/renner)
     */
    public function printenAction()
    {
        $path ='TourtotoSiteBundle:' .$this->object;
        $this->rep=$this->getDoctrine()->getRepository($path);
        $data = $this->rep->selectAll();
        return $this->render('TourtotoSiteBundle:Default:printen.html.twig',$data);
    }
    
//        public function outputAction()
//    {
//        return $this->render('TourtotoSiteBundle:Default:output.html.twig');
//    }
    
}
