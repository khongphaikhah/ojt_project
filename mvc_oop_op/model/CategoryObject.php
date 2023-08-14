<?php

class CategoryObject
{
    private $id;
    private $name;

    public function __construct($row)
    {
        $this->id = $row['id'] ?? '';
        $this->name = $row['name'];
    }

    public function get_id()
    {
        return $this->id;
    }
    public function set_id($var)
    {
        $this->id = $var;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_name($var)
    {
        $this->name = $var;
    }

}