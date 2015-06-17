<?php


namespace Tourtoto\Bundle\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use TourtotoSiteBundle\Entity\Totospeler;
use Symfony\Component\HttpFoundation\Request;
/*
 * @Route(/invoer/{slug})
 */

class InvoerController extends Controller
{
    
    
   
    
      /* 
     * @Route(/invoer/{slug}
     */
            
    public function invoerAction($slug)
    {
        return $this->render('TourtotoSiteBundle:Default:'.$slug.'.html.twig');
    }
    
   
    
      /* 
     * @Route(/invoer/{slug}/{id})
     * 
     */
    
   public function showFormAction(Request $request, $id , $slug)
    {
        // create a task and give it some dummy data for this example
        $totospelernaam = new Totospeler();
        
        
        $form = $this->createFormBuilder($totospelernaam)
            ->add('totospeler', 'text')
            ->add('save', 'submit', array('label' => 'Voeg Totoploeg toe'))
            ->getForm();
         
        
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($request);
        $em->flush();
        echo "hallo";
   
        }
        
        return $this->render('TourtotoSiteBundle:Default:'.$slug.'.html.twig', array('content' => $id, 'form' => $form->createView(), 
                       ));
        
        
        
        
        
            
    } 
     /*
      * @Route(/invoer/{slug}/{id})
      * @Method('POST')
    */
    //public function handleFormAction()
    //{
      //  return $this->render('TourtotoSiteBundle:Default:'.$slug.'.html.twig', array('content' => $id, 'form' => $form->createView(), 
            //           ));
       // if ($form->isValid())
        //{
        // perform some action, such as saving the task to the database
            
       // return $this->redirectToRoute('task_success');  
       // }
   // }
       
  
    
    
             
                  
          
}      
    
  
    
  
    
    
    
    
      
   
    
