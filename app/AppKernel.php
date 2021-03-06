<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
        	new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
        	//admin
        	new Sonata\CoreBundle\SonataCoreBundle(),
        	new Sonata\BlockBundle\SonataBlockBundle(),
        	new Sonata\jQueryBundle\SonatajQueryBundle(),
        	new Knp\Bundle\MenuBundle\KnpMenuBundle(),
        	new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
        	new Sonata\AdminBundle\SonataAdminBundle(),
        	//user
        	new FOS\UserBundle\FOSUserBundle(),        	
        	new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'),
        	new Application\Sonata\UserBundle\ApplicationSonataUserBundle(),
        	//media
        	new Sonata\MediaBundle\SonataMediaBundle(),
        	new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
        	//facebook
        	new FOS\FacebookBundle\FOSFacebookBundle(),
            //suncat
        	new SunCat\MobileDetectBundle\MobileDetectBundle(),
        	//projet
            new Projet\FirstBundle\ProjetFirstBundle(),
            new Projet\MobileBundle\ProjetMobileBundle(),
            new Projet\FacebookBundle\ProjetFacebookBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
    
    protected function initializeContainer() {
    	parent::initializeContainer();
    	if (PHP_SAPI == 'cli') {
    		$this->getContainer()->enterScope('request');
    		$this->getContainer()->set('request', new \Symfony\Component\HttpFoundation\Request(), 'request');
    	}
    }
}
