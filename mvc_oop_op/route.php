<?php

require_once 'controller/Controller.php';
require_once 'controller/CategoryController.php';
require_once 'controller/ProductController.php';


$action = $_GET['action'] ?? 'index';
$controller = $_GET['controller'] ?? 'base';
switch ($controller) {
    case 'base':
        (new Controller())->menu();
        break;
    case 'category':
        switch ($action) {
            case 'index':
                (new CategoryController())->index();
                
                break;
            case 'create':
                (new CategoryController())->create();
                break;
            case 'store':
                (new CategoryController())->store();
                break;
            case 'edit':
                (new CategoryController())->edit();
                break;
            case 'update':
                (new CategoryController())->update();
                break;
            case 'delete':
                (new CategoryController())->delete();
                break;
            default:
                echo 'Không có action category';
                break;
        }
        break;
    case 'product':
        switch ($action) {
            case 'index':
                (new ProductController())->index();
                break;
            case 'create':
                (new ProductController())->create();
                break;
            case'store':
                (new ProductController())->store();
                break;
            case 'edit':
                (new ProductController())->edit();
                break;
            case 'update':
                (new ProductController())->update();
                break;
            case 'delete':
                (new ProductController())->delete();
                break;
            default:
                echo 'Không có action product';
                break;
        }
        break;
    default:
        echo 'Không có controller';
        break;
}