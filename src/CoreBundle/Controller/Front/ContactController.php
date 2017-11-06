<?php

namespace Riverway\Cms\CoreBundle\Controller\Front;

use Doctrine\ORM\EntityManager;
use Riverway\Cms\CoreBundle\Dto\ContactDto;
use Riverway\Cms\CoreBundle\Entity\Contact;
use Riverway\Cms\CoreBundle\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    /**
     * @Route("/contact/create", name="contact_create")
     */
    public function createAction(Request $request)
    {
        $dto = new ContactDto();

        $form = $this->createForm(ContactType::class, $dto, [
            'action' => $this->generateUrl('contact_create'),
        ]);
        $form->handleRequest($request);
        /**
         * @var EntityManager $em
         */
        $em = $this->getDoctrine()->getManager();
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $dto = $form->getData();
                $contact = Contact::createFromDto($dto);
                $em->persist($contact);
                $em->flush();
                return $this->redirect($request->headers->get('referer'));
            }
        }
        return $this->render('@RiverwayCmsCore/ajax-entity-form.html.twig', ['form' => $form->createView()]);
    }
}
