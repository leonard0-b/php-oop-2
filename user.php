<?php

class User {
    private $id;
    private $mail;
    private $address;
    private $payment;

    public function __construct($id, $mail, $address, $payment) {
        $this->id = $id;
        $this->mail = $mail;
        $this->address = $address;
        $this->payment = $payment;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getMail()
    {
        return $this->mail;
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