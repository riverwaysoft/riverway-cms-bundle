<?php

namespace Riverway\Cms\CoreBundle\Widget\Realisation;

use Riverway\Cms\CoreBundle\Form\CrimeMapType;
use Riverway\Cms\CoreBundle\Service\CrimeMap\CrimeMapManagerInterface;
use Riverway\Cms\CoreBundle\Widget\AbstractWidgetRealisation;
use Riverway\Cms\CoreBundle\Widget\WidgetInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;
use Twig\Environment;

final class CrimeMapWidget extends AbstractWidgetRealisation implements WidgetInterface
{

    private $formFactory;
    private $router;
    private $twig;
    private $crimeMapManager;

    /**
     * CrimeMapWidget constructor.
     * @param FormFactory $formFactory
     * @param RouterInterface $router
     * @param Environment $twig
     * @param CrimeMapManagerInterface $crimeMapManager
     */
    public function __construct(FormFactory $formFactory, RouterInterface $router, Environment $twig, CrimeMapManagerInterface $crimeMapManager)
    {
        $this->formFactory = $formFactory;
        $this->router = $router;
        $this->twig = $twig;
        $this->crimeMapManager = $crimeMapManager;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        $address = $this->entity->getExtraDataByKey('defaultAddress') ? $this->entity->getExtraDataByKey('defaultAddress') : '';
        $cityLocation = $this->crimeMapManager->getLocationByName($address);
        $poly = $this->crimeMapManager->boundaryNeighbourhood($this->crimeMapManager->locateNeighbourhood($cityLocation));
        $crimes = $this->crimeMapManager->streetLevelCrimes($poly);

        $form = $this->formFactory->create(CrimeMapType::class, null, [
            'action' => $this->router->generate('crime_map_search'),
            'address' => $address,
            'crimes' => json_encode($crimes),
            'lat' => $cityLocation->lat,
            'lng' => $cityLocation->lng
        ]);

        return $this->twig->render('@RiverwayCmsCore/crime-map-form.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @param FormEvent $event
     */
    public function subscribePreSetData(FormEvent $event)
    {
        $form = $event->getForm();
        $form->add('extraData', TextType::class, [
            'label' => 'Default address',
            'mapped' => false,
            'data' => $this->entity->getExtraDataByKey('defaultAddress') ? $this->entity->getExtraDataByKey('defaultAddress') : ''
        ]);
    }

    /**
     * @param FormEvent $event
     */
    public function subscribePostSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $this->entity->setExtraData(['defaultAddress' => $data['extraData']]);
    }
}