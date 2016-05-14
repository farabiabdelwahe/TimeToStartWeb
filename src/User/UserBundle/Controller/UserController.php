<?php

namespace User\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use User\UserBundle\Entity\User;
use TimeToStart\ProjectBundle;

/**
 * Description of UserController
 *
 * @author MICRO
 */
class UserController extends Controller{
    
    public function listerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("UserUserBundle:User")->findAll();
        return $this->render("UserUserBundle:User:list.html.twig", array("ms"=>$users));
        
    }   
     public function profAction()
    {
        
        
            return $this->render("UserUserBundle:User:profile.html.twig");
        
    }   
    public function logAction()
    {
        
        
            return $this->render("UserUserBundle:Security:login.html.twig");
        
    }   
    public function mainAction()
    {
        
        
            return $this->render("UserUserBundle:User:try.html.twig");
        
    }   
    
     public function loggedAction()
    {
        
        
             return $this->render("UserUserBundle:User:Affichage.html.twig");
        
    }   
    
    public function loggedAdminAction()
    {
        
        
             return $this->render("UserUserBundle:reporting:AffichageAdmin.html.twig");
        
    }   
    
 
    
    
    public function ajouterAction()
    {
        
    
        return $this->render("UserUserBundle:User:AddUser.html.twig", array());
    }      
    
//       public function editAction()
//    {
//        
//    
//        return $this->render("UserUserBundle:User:EditPorfile.html.twig", array());
//    }        
    
     public function editAdminAction()
    {
        
    
        return $this->render("UserUserBundle:reporting:EditPorfile.html.twig", array());
    }    

      public function searchAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("UserUserBundle:User");
        
        $req= $this->get('request');
        
         if ($req->getMethod()=="POST")
          {
              $search = $req->get('s');
             
              
              
              if ($search!="")
              { $user = $em->getRepository("UserUserBundle:User")->findByUsername($search);
              
             
              //var_dump($search);
// ou bien $voiture = $em->getRepository("EspritParcBundle:Voiture")->findBy(array("serie"=>$search, "marque"=>$marque));
          
         /*     $mm = $req->get('m');
              $voiture = $em->getRepository("EspritParcBundle:Voiture")->findBy(array("serie"=>$search, "marque"=>$mm)); */
              } 
              else 
                echo "<script  type=\"text/javascript\">"
    . "alert(\" Please Fill With A UserName \");"
    . "</script>";
              }  
          
        return $this ->render("UserUserBundle:User:trouver.html.twig", array("ms"=>$user));
        
         
    }
     public function searchAdminAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("UserUserBundle:User");
        
        $req= $this->get('request');
        
         if ($req->getMethod()=="POST")
          {
              $search = $req->get('s');
              $user = $em->getRepository("UserUserBundle:User")->findByUsername($search);
              //var_dump($search);
// ou bien $voiture = $em->getRepository("EspritParcBundle:Voiture")->findBy(array("serie"=>$search, "marque"=>$marque));
          
         /*     $mm = $req->get('m');
              $voiture = $em->getRepository("EspritParcBundle:Voiture")->findBy(array("serie"=>$search, "marque"=>$mm)); */
          }  
          
        return $this ->render("UserUserBundle:reporting:trouverAdmin.html.twig", array("ms"=>$user));
        
         
    }
    
        }
