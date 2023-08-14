<?php

require_once 'model/Connect.php';
require_once 'model/CategoryObject.php';

class Category
{
    public function all(): array
    {

        $sql = "select * from categories";
        $result = (new Connect())->select($sql);
        $arr = [];
        foreach ($result as $row) {
            $object = new CategoryObject($row);
            $arr[] = $object;
        }
        return $arr;
    }
    public function create($params): void
    {
        $object = new CategoryObject($params);
        $sql = "insert into categories(name) values ('{$object->get_name()}')";
        (new Connect())->execute($sql);
    }
    public function find($id): object
    {
        $sql = "select * from categories where id = '$id'";
        $result = (new Connect())->select($sql);
        $each = mysqli_fetch_array($result);
        return new CategoryObject($each);
    }
    public function update(array $params) {
        $object = new CategoryObject($params);
        $sql = "update categories set name = ('{$object->get_name()}') where id = '{$object->get_id()}'";
        (new Connect())->execute($sql);
    }
    public function delete($id): void {
        $sql = "delete from categories where id = '$id'";
        (new Connect())->execute($sql);
    }
}