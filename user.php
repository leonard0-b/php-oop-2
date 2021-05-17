<?php

class User {
    private $mail;
    private $id;
    private $address;
    private $payment;

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setPayments($payments)
    {
        $this->payments = $payments;
    }

    public function getPayments()
    {
        return $this->payments;
    }
}