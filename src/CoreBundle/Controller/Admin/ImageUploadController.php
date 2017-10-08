<?php

namespace Riverway\Cms\CoreBundle\Controller\Admin;

use Riverway\Cms\CoreBundle\Service\FileManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ImageUploadController extends Controller
{
    /**
     * @Route("/image/redactor-upload", name="image_redactor_upload")
     */
    public function redactorUploadAction(Request $request)
    {
        $file = $request->files->get('file');
        $info = $this->get('Riverway\Cms\CoreBundle\Service\FileManager')->upload($file);

        return new JsonResponse(['filelink' => $info->getPathname()]);
    }
    /**
     * @Route("/image/redactor-manager", name="image_redactor_manager")
     */
    public function redactorManagerAction(Request $request)
    {
        return new JsonResponse($this->get('Riverway\Cms\CoreBundle\Service\FileManager')->recursiveFetch());
    }

    /**
     * @Route("/image/remove", name="image_remove")
     * @Method({"POST"})
     */
    public function removeAction(Request $request)
    {
        $this->get('Riverway\Cms\CoreBundle\Service\FileManager')->remove($request->get('path'));
        return new JsonResponse();
    }
}
