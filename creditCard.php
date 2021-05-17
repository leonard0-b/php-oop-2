<?php 

trait CreditCard {
    private $number;
    private $expiration_date;
    private $cvc;

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setExpirationDate($expiration_date)
    {
        $this->expiration_date = $expiration_date;
    }

    public function getExpirationDate()
    {
        return $this->expiration_number;
    }

    public function setCvc($cvc)
    {
        $this->cvc = $cvc;
    }

    public function getCVC()
    {
        return $this->cvc
    }
}


?>