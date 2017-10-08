<?php

namespace Riverway\Cms\CoreBundle\Service\Profiler;

use Riverway\Cms\CoreBundle\Enum\TemplateEnum;
use Riverway\Cms\CoreBundle\Service\ArticleRenderer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

class RiverwayCmsCollector extends DataCollector
{
    private $articleRenderer;

    public function __construct(ArticleRenderer $articleRenderer)
    {
        $this->articleRenderer = $articleRenderer;
    }

    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
        $template = "[BASIC]";
        if (($article = $this->articleRenderer->findArticle($request))) {
            $template = (new TemplateEnum($article->getTemplate()))->getKey();
        }
        $this->data = array(
            'template' => $template,
        );
    }
    public function getTemplate(){
        return $this->data['template'];
    }
    public function getName()
    {
        return 'app.riverway_cms_collector';
    }

}