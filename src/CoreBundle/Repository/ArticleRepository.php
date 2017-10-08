<?php

namespace Riverway\Cms\CoreBundle\Repository;

use Doctrine\ORM\Query;
use Riverway\Cms\CoreBundle\Entity\Article;
use Riverway\Cms\CoreBundle\Enum\ArticleStatusEnum;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends \Doctrine\ORM\EntityRepository
{
    public function saveArticle(Article $article)
    {
        $this->getEntityManager()->persist($article);
    }

    public function removeArticle(Article $article)
    {
        $this->getEntityManager()->remove($article);
    }

    /**
     * @return Article[]
     */
    public function getArticleQuery(): Query
    {
        return $this->createQueryBuilder('a')->andWhere('a.status=:status')->setParameter('status', ArticleStatusEnum::PUBLISHED)->getQuery();
    }
}
