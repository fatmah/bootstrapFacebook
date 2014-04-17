<?php

namespace Projet\FacebookBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
//use Symfony\Component\DependencyInjection\Container;

class ProjetFacebookBundle extends Bundle
{
// 	protected $container;
	
// 	public function __construct($container) {
// 		$this->container = $container;
// 	}
	
// 	public function onKernelRequest(GetResponseEvent $event)
// 	{
// 		$request = $event->getRequest();
// 		$mobileDetector = $this->container->get('mobile_detect.mobile_detector');
// 		$mobile = $mobileDetector->isMobile();
// 		if(!$mobile) {
// 			$this->container->setParameter('session.storage.options.use_cookies', 0);
// 			$this->container->setParameter('session.storage.options.url_rewriter.tags', 'a=href,area=href,frame=src,input=src,form=action');
// 			$this->container->setParameter('session.storage.options.use_only_cookies', 0);
// 			$this->container->setParameter('session.storage.options.use_trans_sid', 1);
// 		}
		
// 	}
	
}
