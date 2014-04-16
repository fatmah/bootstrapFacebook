<?php

namespace Projet\MobileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MobileController extends Controller
{
    public function loginAction($local)
    {
        return $this->render('ProjetMobileBundle:Default:index.html.twig');
    }
}
