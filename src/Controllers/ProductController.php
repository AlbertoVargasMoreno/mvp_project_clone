<?php

    namespace App\Controllers;

    use App\Models\ProductModel;

    class ProductController {

        public function viewCreate(){
            // return view('product/create');
        }

        public function viewEdit(){
            // return view('product/edit');
        }

        public function index(){

            $products = new ProductModel();
            $results = $products->indexProduct();
            return $results;
            
        }

        public function getProcessedProducts(){
            $products = $this->index();
            return $products;
        }
        
        public function viewIndex(){
            $products = $this->getProcessedProducts();
            // echo "<pre>";
            // print_r(['products' => $products]);
            return view('product/index', ['products' => $products]);
        }
    }

?>