<?php

/**
 * This file is part of a markocupic Contao Bundle.
 *
 * (c) Marko Cupic 2020 <m.cupic@gmx.ch>
 * @author     Marko Cupic
 * @package    Contao Hello World Bundle
 * @license    MIT
 * @see        https://github.com/markocupic/contao-hello-world-bundle
 *
 */

declare(strict_types=1);

namespace Markocupic\ContaoHelloWorldBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\ServiceAnnotation\ContentElement;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class HelloElementController
 *
 * @package Markocupic\ContaoHelloWorldBundle\Controller\ContentElement
 */
class HelloElementController extends AbstractContentElementController
{

    /**
     * @param Template $template
     * @param ContentModel $model
     * @param Request $request
     * @return Response|null
     */
    protected function getResponse(Template $template, ContentModel $model, Request $request): ?Response
    {

        $template->text = $model->text;

        return $template->getResponse();
    }
}
