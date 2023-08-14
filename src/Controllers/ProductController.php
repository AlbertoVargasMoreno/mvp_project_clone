<?php

    namespace App\Controllers;

    use App\Models\ProductModel;

    class ProductController {

        public function indexProduct(){

            $products = new ProductModel();
            return $products->indexProduct();
            
        }

    }

?>