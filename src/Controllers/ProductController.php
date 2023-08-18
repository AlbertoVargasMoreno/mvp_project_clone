<?php

    namespace App\Controllers;

    use App\Models\ProductModel;

    class ProductController {

        public function viewIndex(){
            return view('product/index');
        }

        public function viewCreate(){
            return view('product/create');
        }

        public function viewEdit(){
            return view('product/edit');
        }
        
        public function index(){

            $products = new ProductModel();
            $results = $products->indexProduct();
            return $results;
            
        }

        

    }

?>