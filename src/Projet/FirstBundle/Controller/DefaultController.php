<?php

namespace Projet\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

    	$session = $this->getRequest()->getSession();
		$loginUrl = null;
		$pageIds = null;
    	$fan = false;

    		$facebook = $this->get('fos_facebook.api');
    		$user = $facebook->getUser();
    		$liked = null;
    		$signed_request = $facebook->getSignedRequest();
    		if(isset($signed_request['page']))
    		{
    			$pageIds = $signed_request['page']['id'];
    			$liked = $signed_request['page']['liked'];
    		}
    		$pageId = $session->get('pageId', $pageIds);
    		$fan= $session->get('fan',$liked );
    		$session->set('pageId', $pageId);
    		$session->set('fan', $fan);
    	if (!$user)
    	{
    		$urlApp = $session->get('url_page');
    		$params = array(
    				'scope' => '',
    				'redirect_uri' => $urlApp,
    		);
    		$loginUrl = $facebook->getLoginUrl($params);
    	}
    
        return $this->render('ProjetFirstBundle:Default:index.html.twig', array('fan' => $fan , 'loginUrl' => $loginUrl));
    }
    public function changLocalAction(Request $request,$locale)
    {
    	$request->getSession()->set('_locale', $locale);
    	$request->setLocale($locale);
    
    	$referer = $request->headers->get('referer');
    	if (strpos($referer, 'PHPSESSID') === false)
    	{
    		if (strpos($referer, '?') === false)
    		{
    			$referer = $referer.'?PHPSESSID='.$request->getSession()->getId();
    		}
    		else
    		{
    			$referer = $referer.'&PHPSESSID='.$request->getSession()->getId();
    		}
    	}
    	 
    	return new RedirectResponse($referer);
    }
    public function testAction()
    {
    	return $this->render('ProjetFirstBundle:Default:test.html.twig', array());
    }
}
