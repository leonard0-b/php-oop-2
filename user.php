<?php

class User {
    private $username;
    private $password;
    private $address;
    private $account_type = 'basic';

    public function __construct($username, $password, $address, $account_type) {
        $this->id = $username;
        $this->mail = $password;
        $this->address = $address;
        $this->account_type = $account_type;
    }

    public function setId($username)
    {
        $this->username = $username;
    }

    public function getId()
    {
        return $this->username;
    }

    public function setMail($password)
    {
        $this->password = $password;
    }

    public function getMail()
    {
        return $this->password;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAccountType($account_type)
    {
        $this->account_type = $account_type;
    }

    public function getAccountType()
    {
        return $this->account_type;
    }
}