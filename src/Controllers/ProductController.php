<?php

    namespace App\Controllers;

    use App\Models\ProductModel;

    class ProductController {

        public function create(){
            return view('product/create', null);
        }

        public function edit(){
            return view('product/edit', null);
        }
        
        public function index(){
            $products = new ProductModel();
            $results = $products->indexProduct();
            return view('product/index', ['products' => $results]);
        }
    }

?>