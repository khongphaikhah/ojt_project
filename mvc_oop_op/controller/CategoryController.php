<?php

class CategoryController
{
    public function index(): void
    {
        require_once 'model/Category.php';
        $arr = (new Category())->all();
        require_once 'view/category/index.php';
    }
    public function create(): void
    {
        require_once 'view/category/create.php';
    }
    public function store(): void
    {
        require_once 'model/Category.php';
        (new Category())->create($_POST);
    }
    public function edit(): void
    {
        $id = $_GET['id'];
        require_once 'model/Category.php';
        $each = (new Category())->find($id); 
        require_once 'view/category/edit.php';
    }
    public function update(): void
    {
        require_once 'model/Category.php';
        $each = (new Category())->update($_POST); 
        require_once 'view/category/edit.php';
    }
    public function delete(): void
    {
        require_once 'model/Category.php';
        $each = (new Category())->delete($_GET['id']); 
    }
    
}