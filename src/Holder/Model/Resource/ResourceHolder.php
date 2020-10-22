<?php

namespace wjcryto\Holder\Model\Resource;

use wjcryto\Holder\Model\Holder;

class ResourceHolder
{
    private $connection;
    private $holder;

    public function __construct(\PDO $connection, Holder $holder)
    {
        $this->connection = $connection;
        $this->holder =$holder;
    }

    public function insert()
    {
        $sqlInsert = "INSERT INTO WJCYRTO_HOLDER( nameHolder, email, document, documentAdd, birthDate,
        phone, andress, numberAccount, password) VALUES (:nameHolder, :email, :document, :documentAdd,
         :birthDate, :phone, :andress, :numberAccount, :password)";

        $stmt = $this->connection->prepare($sqlInsert);

        $sucess = $stmt->execute([
            ':nameHolder' => $this->holder->getName(),
            ':email' => $this->holder->getEmail(),
            ':document' => $this->holder->getDocument(),
            ':documentAdd' => $this->holder->getDocumentAdd(),
            ':birthDate' => $this->holder->getBirthDate(),
            ':phone' => $this->holder->getPhone(),
            ':andress' => $this->holder->getAndress(),
            ':numberAccount' => $this->holder->getNumberAccount(),
            ':password' => $this->holder->getPassword()
        ]);

        return $sucess;
    }

    public function read($id)
    {
        $sqlUpdate = "SELECT * FROM WJCYRTO_HOLDER WHERE id = :id;";

        $stmt = $this->connection->prepare($sqlUpdate);
        $this->holder->setId($id);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        if (count($result) > 0) {
            $row = $result[0];
            $this->holder->setEmail($row['email']);
            $this->holder->setId($row['id']);
            $this->holder->setName($row['nameHolder']);
            $this->holder->setDocument($row['document']);
            $this->holder->setBirthDate($row['birthDate']);
            $this->holder->setNumberAccount($row['numberAccount']);
            $this->holder->setDocumentAdd($row['documentAdd']);
            $this->holder->setPhone($row['phone']);
            $this->holder->setAndress($row['andress']);
            $this->holder->setPassword($row['password']);
            return $this->holder;
        }
    }

    public function verifyLogin($email, $password)
    {
        $querySelect = "SELECT * FROM WJCYRTO_HOLDER WHERE email = :email AND password = :password;";
        $stmt = $this->connection->prepare($querySelect);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);


        if (count($results) > 0) {
            $row = $results[0];
            $this->holder->setEmail($row['email']);
            $this->holder->setId($row['id']);
            $this->holder->setName($row['nameHolder']);
            $this->holder->setDocument($row['document']);
            $this->holder->setBirthDate($row['birthDate']);
            $this->holder->setNumberAccount($row['numberAccount']);
            $this->holder->setDocumentAdd($row['documentAdd']);
            $this->holder->setPhone($row['phone']);
            $this->holder->setAndress($row['andress']);
            $this->holder->setPassword($row['password']);
            return $this->holder;
        }

    }
}