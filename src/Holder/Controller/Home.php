<?php


namespace wjcryto\Holder\Controller;


class Home
{
    public function processRequest()
    {

        response()->json(['ECHO']);
        require __DIR__ . '/../../../view/signUp/home.php';
    }
}