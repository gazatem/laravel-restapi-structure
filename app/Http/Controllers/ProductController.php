<?php
namespace App\Http\Controllers;

use App\Product;
use App\ProductTransformer;

class ProductController extends BaseController
{

    public function index()
    {
        $products = Product::all();

        return $this->response->collection($products, new ProductTransformer);
    }
}
