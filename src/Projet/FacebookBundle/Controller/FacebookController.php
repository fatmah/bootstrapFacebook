<?php

namespace Projet\FacebookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FacebookController extends Controller
{
    public function indexAction()
    {
    	$facebook = $this->get('projet_facebook.facebook_manager');
    	$fan = $facebook->isFan();
    	$url = $facebook->getLoginUrl();
    	$isLog = $facebook->testLogin();

        return $this->render('ProjetFacebookBundle:Facebook:index.html.twig', array('fan'=>$fan,'url'=>$url));
    }
    

}
