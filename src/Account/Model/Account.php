<?php

namespace wjcryto\Account\Model;

class Account
{
    private $id;
    private $numberAcount;
    private $balance;

    public function __construct()
    {
        $this->balance = 0;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function getNumberAccount()
    {
        return $this->numberAcount;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNumberAccount($newNumberAccount)
    {
        $this->numberAcount = $newNumberAccount;
    }

    public function setBalance($newBalance)
    {
        $this->balance = $newBalance;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}