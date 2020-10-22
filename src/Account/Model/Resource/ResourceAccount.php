<?php

namespace wjcryto\Account\Model\Resource;

use wjcryto\Account\Model\Account;

class ResourceAccount
{
    private $connection;
    private $account;

    public function __construct(\PDO $connection, Account $account)
    {
        $this->connection = $connection;
        $this->account = $account;
    }

    public function insert()
    {
        $sqlInsert = "INSERT INTO WJCRYTO_ACCOUNT (numberAccount) VALUES (:numberAccount)";

        $stmt = $this->connection->prepare($sqlInsert);

        $sucess = $stmt->execute([
            ':numberAccount' => $this->account->getNumberAccount()]);

        //$sucess = false;

        return $sucess;
    }
}