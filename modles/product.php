<?php
class Product
{
    public $id;
    public $name;
    public $image;
    public $price;
    public $chitiet;

    public function __construct($id, $name, $image, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
    }
}
