<?php

declare(strict_types=1);

namespace Fm\App\Action;

use Zend\Diactoros\Response\HtmlResponse;

/**
 * Class HomeAction
 *
 * @package Fm\App\Action
 * @author Andy Ecca <andy.ecca@gmail.com>
 * @copyright (c) 2016, Orbis
 */
class HomeAction extends Action
{

    public function __invoke($request, $response)
    {
        $data = [];
        $data['title'] = $this->getTitle('Fast food');

        return new HtmlResponse($this->template->render('app::index', $data));
    }

    public function getTitle(String $title): String
    {
        return "$title - Home";
    }
}
