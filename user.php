<?php

require_once "./CreditCard.php";

class User {
    use CreditCard;

    private $username;
    private $password;
    private $address;

    public function __construct($username, $password, $address, $number, $expiration_date, $cvc) {
        if ($expiration_date < "11-2022") {
            throw new \Exception("La carta è scaduta!");
        }

        $this->id = $username;
        $this->mail = $password;
        $this->address = $address;
        $this->setNumber($number);
        $this->setExpirationDate($expiration_date);
        $this->setCvc($cvc);
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