<?php

class ProductController
{
    public function index(): void
    {
        require_once "model/Product.php";
        $arr = (new Product())->all(); 
        require_once "view/product/index.php";
    }
    public function create(): void
    {
        require_once "model/Category.php";
        $categories = (new Category())->all();
        require_once "view/product/create.php";
    }
    public function store(): void
    {
        require_once "model/Product.php";
        (new Product())->create($_POST);
    }
    public function edit(): void
    {
        $id = $_GET["id"];
        require_once "model/Product.php";
        $each = (new Product())->find($id); 
        require_once "model/Category.php";
        $categories = (new Category())->all();
        require_once "view/product/edit.php";
    }
    public function update(): void
    {
        require_once "model/Product.php";
        $each = (new Product())->update($_POST); 
        require_once "view/product/edit.php";
    }
    public function delete(): void
    {
        require_once "model/Product.php";
        $each = (new Product())->delete($_GET["id"]); 
    }
    
}