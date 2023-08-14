<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    private object $model;
    private string $table;
    public function __construct()
    {
        $this->model = Product::query();
        $this->table = (new Product())->getTable();

        View::share('table', $this->table);
    }

    public function index() {
        return view('admin.products.index');
    }
}
