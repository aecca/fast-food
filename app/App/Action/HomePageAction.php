<?php

namespace Fm\App\Action;

use Zend\Diactoros\Response\HtmlResponse;

/**
 * Class HomePageAction
 *
 * @package Fm\App\Action
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016
 */
class HomePageAction extends Action
{

    public function __invoke($request, $response)
    {
        $data = [];
        $data['title'] = 'Fast Food Delivery';

        return new HtmlResponse($this->template->render('app::index', $data));
    }
}
