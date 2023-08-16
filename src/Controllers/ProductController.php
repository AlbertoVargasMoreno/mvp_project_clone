<?php

    namespace App\Controllers;

    use App\Models\ProductModel;

    class ProductController {

        public function index(){

            $products = new ProductModel();
            $products->indexProduct();

            return view('product');
            
        }

    }

?>