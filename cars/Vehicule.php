<?php

class Vehicule
{
    public int $id; 
    private string $country;
    protected string $brand;

    public function getCountry(){
        return $this->country;
    } 

    public function setCountry($country){
        $this->country = $country;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function setBrand($brand){
        $this->brand = $brand; 
    }
}