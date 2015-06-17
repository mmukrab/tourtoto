<?php

namespace TourtotoSiteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PloegRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TotospelerploegRepository extends EntityRepository 
{
    public function selectAll($filter = NULL) {
        
        $success = true;
        $data = array();
        $errors = array();
        //$header = array("id", "code", "naam", "land");
        
        if(isset($filter)) {
            $dr = $this->findBy($filter);
        } else {
            $dr = $this->findAll();
        }
        
        if(count($dr) > 0 && !empty($dr)) {
            foreach($dr as $record) {
        
                $data[] = array(        
                    "id"         => $record->getId(),
                    "reserve"   => $record->getCode(),
                    "renner" => $record->getNaam(),
                    "totospeler"     => $record->getLand()->getNaam()      
                        
                );
            }
         } 
         else 
             {
        
            $success = false;
            $errors[] = array("field" => $this->getClassName(),
                              "error" => "e_no_data_found");
        }
        
        $result = array("success" => $success, 
                        "data"    => $data, 
                        "errors"  => $errors,
                        "header"  => $header);  
        return($result);
        
    }
    
    
//    public function selectOne($id) {
//        $data = $this->selectAll(array("id"=>$id));
//        return($data);
//    }
    
//    public function saveData($params)
//    {
//        
//        $dr = new vrRecepten();
//        if ($params["id"] != null)
//        {
//             $data = $this->findBy(array("id" => $params["id"]));
//             if ($data != null)
//            {
//                 $data=array([0]);
//            }
//        }
//            
//        
//        
//        $dr->setRcptNaam($params["rcpt_naam"]);
//        $dr->setRcptKeuken($params["rcpt_keuken"]);
//        $dr->setRcptKorteBeschrijving($params["rcpt_korte_beschrijving"]);
//        
//        $this->getEntityManager()->persist($dr);
//        $this->getEntityManager()->flush();
//        
//        $id=$dr->getId();
//        $data = $this->selectAll(array("id" => $id));
//        return($data);
//    }
    
    
}