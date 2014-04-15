<?php
namespace Projet\FirstBundle\EventListner;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LocaleListener implements EventSubscriberInterface
{
	private $defaultLocale;
	private $facebook;
	private $container;
	
	public function __construct($defaultLocale = 'en',$facebook, ContainerInterface $container)
	{
		$this->defaultLocale = $defaultLocale;
		$this->facebook = $facebook;
		$this->container = $container;
	}

	public function onKernelRequest(GetResponseEvent $event)
	{
		$request = $event->getRequest();
		$page_ids = null;
		$page_ids = $this->container->get('session')->get('pageId');
		// try to see if the locale has been set as a _locale routing parameter
		if ($locale = $request->attributes->get('_locale')) {
			$request->getSession()->set('_locale', $locale);
				
		} else {
			// if no explicit locale has been set on this request, use one from the session
			if($request->getSession()->get('_locale'))
			{
				$request->setLocale($request->getSession()->get('_locale'));
			}
			else
			{
         			$fb_pages = $this->container->getParameter('fb_pages');
         			$default_page = $this->container->getParameter('default_page');
         			$url_page = null;
         			$no_page = false;

         			foreach ($fb_pages as $key => $value)
         			{
         				if($key == $page_ids)
         				{
         					$default_locale = $value['default'];
         					$url_page = $value['url_page'];
         					$request->getSession()->set('url_page', $url_page);
         					$request->getSession()->set('_locale', $default_locale);
         					$request->setLocale($default_locale);
         					$no_page = true;
         				}
         			}
         			if(false == $no_page)
         			{
         				
         				foreach ($default_page as $key => $value)
         				{
         					$request->getSession()->set('url_page', $value['url_page']);
         					$request->getSession()->set('_locale', $value['default']);
         					$request->setLocale($value['default']);
         					break;
         				}
         			}

        		//}
        	
        	} 
		}
	}

	public static function getSubscribedEvents()
	{
		return array(
				// must be registered before the default Locale listener
				KernelEvents::REQUEST => array(array('onKernelRequest', 17)),
		);
	}
}