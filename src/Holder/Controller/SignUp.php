<?php

namespace wjcryto\Holder\Controller;

class SignUp
{
    public function processRequest(): void
    {
        require __DIR__ . '/../../../view/signUp/signUp.php';
    }

}