<?php


namespace wjcryto\Holder\Controller;


class SignIn
{
    public function processRequest(): void
    {
        require __DIR__ . '/../../../view/signUp/signIn.php';
    }
}