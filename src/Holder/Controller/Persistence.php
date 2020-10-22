<?php

namespace wjcryto\Holder\Controller;

use wjcryto\Account\Model\Account;
use wjcryto\Account\Model\Resource\ResourceAccount;
use wjcryto\Holder\Model\Holder;
use wjcryto\Holder\Model\Resource\ResourceHolder;
use wjcryto\Sql\Connection;

class Persistence
{
    public function insert()
    {
        $holder = new Holder();
        $account = new Account();
        $data = input()->all();

        $holder->setName($data['name']);
        $holder->setEmail($data['email']);
        $holder->setDocument($data['document']);
        $holder->setDocumentAdd($data['documentAdd']);
        $holder->setBirthDate($data['birthDate']);
        $holder->setPhone($data['phone']);
        $holder->setAndress($data['address']);
        $holder->setNumberAccount($data['numberAccount']);
        $holder->setPassword($data['password']);

        $account->setNumberAccount($data['numberAccount']);

        $con = Connection::creatConnection();
        $resourceHolder = new ResourceHolder($con, $holder);
        $resourceAccount = new ResourceAccount($con, $account);

        $resourceHolder->insert();
        $resourceAccount->insert();

        if($_SERVER['CONTENT_TYPE'] === 'application/json') {
            if(!($resourceHolder->insert() && $resourceAccount->insert())){
              return response()->json(['Ocorreu um erro, cadastre novamente']);
            }
            return response()->json(['Cadastro realizado com sucesso!']);
        }

        return header('Location: /home');
    }
}