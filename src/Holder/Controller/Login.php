<?php


namespace wjcryto\Holder\Controller;

use http\Header;
use wjcryto\Holder\Model\Holder;
use wjcryto\Holder\Model\Resource\ResourceHolder;
use wjcryto\Sql\Connection;


class Login
{
    public function processRequest()
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        if($email === false || is_null($email)){
            echo "Email inválido";
            exit();
        }

        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        if($password === false || is_null($password)){
            echo "Senha inválido";
            exit();
        }

        $pdo = Connection::creatConnection();

        $holder = new Holder();

        $holderResource = new ResourceHolder($pdo, $holder);

        $holder = $holderResource->verifyLogin($email, $password);

        header('Location: /home');

        exit();
    }

    public function login()
    {
        $data = input()->all();


        $email = $data['username'];

        $password = $data['password'];

        if($email === false || is_null($email)){
            return response()->json(['Insira um e-mail válido']);
        }

        if($password === false || is_null($password)){
            return response()->json(['Insira uma senha válida']);
        }

        $pdo = Connection::creatConnection();

        $holder = new Holder();

        $holderResource = new ResourceHolder($pdo, $holder);

        $holder = $holderResource->verifyLogin($email, $password);

        if(empty($holder)){
            return response()->json(['Titular não encontrado']);
        }

        return response()->json($data);
    }
}