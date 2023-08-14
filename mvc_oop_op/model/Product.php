<?php

require_once 'model/Connect.php';
require_once 'model/ProductObject.php';

class Product 
{
    private string $table = 'products';
    public function all(): array
    {

        $sql = "select t.*, c.name as category_name from $this->table as t inner join categories as c on t.category_id = c.id";
        $result = (new Connect())->select($sql);
        $arr = [];
        foreach ($result as $row) { 
            $object = new ProductObject($row);
            $arr[] = $object;
        }
        return $arr;
    }
    public function create($params): void
    {
        $object = new ProductObject($params);
        $sql = "insert into $this->table (name,price,description,category_id) 
        values 
        ('". $object->get_name() ."', '". $object->get_price() ."', '". $object->get_decription() ."', '". $object->get_category_id() ."')";
        (new Connect())->execute($sql);
    }
    public function find($id): object
    {
        $sql = "select * from $this->table where id = '$id'";
        $result = (new Connect())->select($sql);
        $each = mysqli_fetch_array($result);
        return new ProductObject($each);
    }
    public function update(array $params) {
        $object = new ProductObject($params);
        $sql = "update $this->table 
        set 
        name = '". $object->get_name() ."',
        price = '". $object->get_price()."',
        description = '". $object->get_decription()."',
        category_id = '". $object->get_category_id()."'
        where id = '" .$object->get_id() ."'";
        (new Connect())->execute($sql);
    }
    public function delete($id): void {
        $sql = "delete from $this->table where id = '$id'";
        (new Connect())->execute($sql);
    }
}