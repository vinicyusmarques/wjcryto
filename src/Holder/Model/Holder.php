<?php

namespace wjcryto\Holder\Model;

class Holder
{
    private $id;
    private $name;
    private $email;
    private $document;
    private $documentAdd;
    private $birthDate;
    private $phone;
    private $andress;
    private $numberAccount;
    private $password;


    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function getDocumentAdd()
    {
        return $this->documentAdd;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAndress()
    {
        return $this->andress;
    }

    public function getDocument()
    {
        return $this->document;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDocument($document)
    {
        $this->document = $document;
    }

    public function setAndress($andress)
    {
        $this->andress = $andress;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function setDocumentAdd($documentAdd)
    {
        $this->documentAdd = $documentAdd;
    }

    public function getNumberAccount()
    {
        return $this->numberAccount;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setPassword($newPassword)
    {
        $this->password = $newPassword;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setNumberAccount($newNumberAccount)
    {
        $this->numberAccount = $newNumberAccount;
    }

    public function getHolder()
    {
        return [
            "name" => $this->name,
            "email" => $this->getEmail(),
            "document" => $this->getDocument(),
            "documentAdd" => $this->getDocumentAdd(),
            "birthDate" => $this->getBirthDate(),
            "phone" => $this->getPhone(),
            "address" => $this->getAndress(),
            "numberAccount" => $this->getNumberAccount(),
            "password" => $this->getPassword()
        ];
    }
}