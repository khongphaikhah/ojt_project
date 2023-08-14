<?php

class ProductObject
{
    private $id;
    private $name;
    private $price;
    private $decription;
    private $category_id;
    private $category_name;

    public function __construct($row)
    {
        $this->id = $row['id'] ?? '';
        $this->name = $row['name'];
        $this->price = $row['price'];
        $this->decription = $row['description'];
        $this->category_id = $row['category_id'];
        $this->category_name = $row['category_name'] ?? '';
    }
    public function get_id()
    {
        return $this->id;
    }

    public function get_name()
    {
        return $this->name;
    }
    public function get_price()
    {
        return $this->price;
    }
    public function get_decription()
    {
        return $this->decription;
    }
    public function get_category_id()
    {
        return $this->category_id;
    }
    public function get_category_name()
    {
        return $this->category_name;
    }
    public function set_id($var)
    {
        $this->id = $var;
    }
    public function set_name($var)
    {
        $this->name = $var;
    }
    public function set_price($var)
    {
        $this->price = $var;
    }
    public function set_decription($var)
    {
        $this->decription = $var;
    }
    public function set_category_id($var)
    {
        $this->category_id = $var;
    }

}