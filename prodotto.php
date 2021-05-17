<?php

class Product {
    private $gender;
    private $category;
    private $brand;
    private $price;
    private $id;

public function setGender($gender)
    {
        $this->gender = $gender;
    }

public function getGender()
    {
        return $this->gender;
    }

public function setCategory($category)
    {
        $this->category = $category;
    }

public function getCategory($category)
    {
        return $this->category;
    }

public function setBrand($brand)
    {
        $this->brand = $brand;
    }

public function getBrand($brand)
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

public function setId($id)
    {
        $this->id = $id;
    }

public function get()
    {
        return $this->id;
    }
}