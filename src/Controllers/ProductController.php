<?php

    namespace App\Controllers;

    use App\Models\ProductModel;

    class ProductController {

        public function index(){

            $products = new ProductModel();
            $results = $products->indexProduct();

            // require __DIR__ . "/../Views/product/index.php";

            return view('product/index');
            
        }

        public function create(){
            return view('product/create');
        }

    }

?>