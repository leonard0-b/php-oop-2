<?php

class Product {

    private $id;
    private $name;
    private $category;
    private $brand;
    private $price;
    private $status;

public function __construct($id, $name, $category, $brand, $price, $status) {
    $this->id = $id;
    $this->name = $name;
    $this->category = $category;
    $this->brand = $brand;
    $this->price = $price;
}

public function setId($id)
    {
        $this->id = $id;
    }

public function getId()
    {
        return $this->id;
    }

public function setName($name)
    {
        $this->name = $name;
    }

public function getName()
    {
        return $this->name;
    }

public function setCategory($category)
    {
        $this->category = $category;
    }

public function getCategory()
    {
        return $this->category;
    }

public function setBrand($brand)
    {
        $this->brand = $brand;
    }

public function getBrand()
    {
        return $this->brand;
    }

public function setPrice($price)
    {
        $this->price = $price;
    }

public function getPrice()
    {
        return $this->price;
    }

public function setStatus($status)
    {
        $this->status = $status;
    }

public function getStatus()
    {
        return $this->status;
    }
}
