<?php
namespace Riverway\Cms\CoreBundle\EventListener;

use Riverway\Cms\CoreBundle\Service\ArticleRenderer;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelEvents;

class ExceptionListener implements EventSubscriberInterface
{
    private $renderer;

    /**
     * ExceptionListener constructor.
     * @param ArticleRenderer $renderer
     */
    public function __construct(ArticleRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::EXCEPTION => 'onKernelException',
        ];
    }

    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        $exception = $event->getException();

        if ($event->getRequestType() === HttpKernelInterface::MASTER_REQUEST && $exception instanceof NotFoundHttpException) {
            if (($response = $this->renderer->render($event->getRequest()))) {
                $response->headers->set('X-Status-Code', 200);
                $event->setResponse($response);
            }
        }
    }
}