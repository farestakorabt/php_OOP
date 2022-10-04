<?php

class Country
{
    public int $id;
    public string $name;
    public string $capital;
    public int $population;
    public string $president;
    public int $area;
    private int $debts;
    protected bool $corrupted;
    
    public function getDebts(){
        return $this->debts;
    }

    public function setDebts($debts) {
        $this->debts = $debts;
    }

    public function getCorrupted(){
        return $this->corrupted;
    }

    public function setCorrupted($corrupted){
        $this->corrupted = $corrupted;
    }
}