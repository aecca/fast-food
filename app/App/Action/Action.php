<?php

namespace Fm\App\Action;

use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

/**
 * Class Action
 *
 * @package Fm\App\Action
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016
 */
class Action
{
    protected $template;
    protected $route;

    public function __construct(RouterInterface $route, TemplateRendererInterface  $template)
    {
        $this->route = $route;
        $this->template = $template;
    }

}