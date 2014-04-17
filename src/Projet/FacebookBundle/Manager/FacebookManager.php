<?php
namespace Projet\FacebookBundle\Manager;

use FOS\FacebookBundle\Facebook\FacebookSessionPersistence;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;

class FacebookManager extends FacebookSessionPersistence {

	public function __construct($config, $session)
	{
		parent::__construct($config, $session);

	}

		public function isFan()
		{
			$fan = false;
			$user = $this->getUser();
			$liked = null;
			$pageIds= null;
			$signed_request = $this->getSignedRequest();
			if(isset($signed_request['page']))
			{
				$pageIds = $signed_request['page']['id'];
				$liked = $signed_request['page']['liked'];
			}
			$pageId = $this->session->get('pageId', $pageIds);
			$fan= $this->session->get('fan',$liked );
			$this->session->set('pageId', $pageId);
			$this->session->set('fan', $fan);
			return $fan;
		}
		
		public function testLogin()
		{
			$user = $this->getUser();
			
			if ($user) {
				try {
					$user_profile = $this->api('/'.$user);
				} catch (FacebookApiException $e) {
					error_log($e);
					$user = null;
					
				}
			}
			else {
				$loginUrl = $this->getLoginUrl();
				header("Location:".$loginUrl); 
				exit();
				
			}
		}

	

}
