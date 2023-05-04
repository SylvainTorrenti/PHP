<?php

class Voiture
{
    private $model;
    private $brand;
    private $color;
    private $year;
    public function __construct($model, $brand, $color, $year)
    {
        $this->model = $model;
        $this->brand = $brand;
        $this->color = $color;
        $this->year = $year;
    }
    public function getModel(): string
    {
        return $this->model;
    }
    public function getBrand(): string
    {
        return $this->brand;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function getYear(): string
    {
        return $this->year;
    }
}











?>