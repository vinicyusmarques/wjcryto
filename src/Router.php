<?php

namespace wjcryto;

use Pecee\SimpleRouter\SimpleRouter;

class Router extends SimpleRouter
{
    /**
     * @throws \Exception
     * @throws \Pecee\Http\Middleware\Exceptions\TokenMismatchException
     * @throws \Pecee\SimpleRouter\Exceptions\HttpException
     * @throws \Pecee\SimpleRouter\Exceptions\NotFoundHttpException
     */
    public static function start(): void
    {

        parent::setDefaultNamespace('wjcryto\Holder\Controller');
        // Load our helpers
        require_once 'helpers.php';

        // Load our custom routes
        require_once '../routes/web.php';

        // Do initial stuff
        parent::start();
    }

}