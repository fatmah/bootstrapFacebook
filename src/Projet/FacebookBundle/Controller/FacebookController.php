<?php

namespace Projet\FacebookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FacebookController extends Controller
{
    public function indexAction()
    {
    	$facebook = $this->get('projet_facebook.facebook_manager');
    	$fan = $facebook->isFan();
    	//$facebook->testLogin(); 

        return $this->render('ProjetFacebookBundle:Facebook:index.html.twig', array('fan'=>$fan));
    }
    

}
