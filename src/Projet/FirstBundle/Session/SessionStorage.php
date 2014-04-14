<?php

namespace Projet\FirstBundle\Session;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Symfony\Component\HttpFoundation\Request;

class SessionStorage extends NativeSessionStorage
{
	public function __construct(array $options = array(), ContainerInterface $container)
	{
		$request = $container->get('request');
		if ($request->isMethod('GET') && $request->query->has('PHPSESSID') ) {
			$request->cookies->set(session_name(), 1);    // We have to simulate this cookie, in order to bypass the "hasPreviousSession" security check
			session_id($request->query->get('PHPSESSID'));
		}
		if ($request->isMethod('POST') && $request->request->has('PHPSESSID')) {
			$request->cookies->set(session_name(), 1);    // We have to simulate this cookie, in order to bypass the "hasPreviousSession" security check
			session_id($request->request->get('PHPSESSID'));
		}
		return parent::__construct($options);
	}
}