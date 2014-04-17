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
                $locale = $this->facebook->getLocalFb();
				$request->getSession()->set('_locale', $locale);
				$request->setLocale($locale);
        	
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