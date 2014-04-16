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

    	$session = $request->getSession();
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
    
    public function proxyAction(Request $request, $local)
    {
    	$request->getSession()->set('origin_locale', $local);
    	$request->getSession()->set('origin_page', $this->getFacebookAppFromLocale($local, true));
    	$request->setLocale($local);
    
    	$first = $request->getSession()->get('first');
    	if ($local && empty($first)) {
    		$request->getSession()->set('_locale', $local);
    		$request->getSession()->set('first', true);
    	} else {
    		$current_local = $request->getSession()->get('_locale');
    		$request->getSession()->set('_locale', $current_local);
    	}
    	$agent = $request->headers->get('User-Agent');
    
    	if ($this->userAgentIsCrawler($agent) == false ) {
    		$mobileDetector = $this->get('mobile_detect.mobile_detector');
    		if ($mobileDetector->isMobile() && !$mobileDetector->isTablet()) { //Mobile
    			
    			return $this->forward('ProjetMobileBundle:Mobile:login', array('local' => $local));
    		} else { //Desktop
    
    			return $this->redirect($this->getFacebookAppFromLocale($local));
    		}
    	} else { //Facebook Crawler
    
    		return $this->render('ProjetFirstBundle:Default:opengraph.html.twig', array('local' => $local));
    	}
    
    }
    
    protected function getFacebookAppFromLocale($locale = 'en', $get_id = false)
    {
    	$fb_pages = $this->container->getParameter('fb_pages');
    	foreach ($fb_pages as $key => $value) {
    		if ($value['default'] == $locale) {
    			if ($get_id) return $key;
    			return $value['url_page'];
    		}
    	}
    	$default_page = $this->container->getParameter('default_page');
    	foreach ($default_page as $key => $value) {
    		if ($value['default'] == $locale) {
    			if ($get_id) return $key;
    			return $value['url_page'];
    		}
    	}
    
    	return 'http://'.$this->container->getParameter('proxy_url');
    }
    
    protected function userAgentIsCrawler($agent)
    {
    	if ((strpos(strtolower($agent), 'facebookexternalhit') !== false) || (strpos(strtolower($agent), 'linkedinbot') !== false)  ) {
    		return  true;
    	}
    
    	return false;
    }
}
