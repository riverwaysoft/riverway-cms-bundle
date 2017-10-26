<?php

namespace Riverway\Cms\CoreBundle\Application;
use Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    public function registerBundles()
    {
        $bundles = [
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new \Symfony\Bundle\TwigBundle\TwigBundle(),
            new \Symfony\Bundle\MonologBundle\MonologBundle(),
            new \Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new \Vich\UploaderBundle\VichUploaderBundle(),
            new \Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new \Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new \FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new \Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new \EightPoints\Bundle\GuzzleBundle\GuzzleBundle(),
            new \Liip\ImagineBundle\LiipImagineBundle(),
            new \FOS\RestBundle\FOSRestBundle(),
            new \JMS\SerializerBundle\JMSSerializerBundle(),
            new \Tetranz\Select2EntityBundle\TetranzSelect2EntityBundle(),
            new \Riverway\Cms\CoreBundle\RiverwayCmsCoreBundle(),
            new \Riverway\Grid\RiverwayGridBundle(),
            new \WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
            new \Sentry\SentryBundle\SentryBundle(),
            new DoctrineMigrationsBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new \Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new \Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new \Sensio\Bundle\DistributionBundle\SensioDistributionBundle();

            if ('dev' === $this->getEnvironment()) {
                $bundles[] = new \Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
                $bundles[] = new \Symfony\Bundle\WebServerBundle\WebServerBundle();
            }
        }

        return $bundles;
    }


    public function getCacheDir()
    {
        return $this->getRootDir().'/../var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return $this->getRootDir().'/../var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}