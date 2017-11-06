<?php

namespace Riverway\Cms\CoreBundle\Repository;

use Doctrine\ORM\Query;
use Riverway\Cms\CoreBundle\Entity\Contact;

/**
 * ContactRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ContactRepository extends \Doctrine\ORM\EntityRepository
{
    public function saveContact(Contact $contact)
    {
        $this->getEntityManager()->persist($contact);
        $this->getEntityManager()->flush();
    }

    public function removeContact(Contact $contact)
    {
        $this->getEntityManager()->remove($contact);
        $this->getEntityManager()->flush();
    }

    /**
     * @return Contact[]
     */
    public function getContactQuery(): Query
    {
        return $this->createQueryBuilder('c')->getQuery();
    }
}