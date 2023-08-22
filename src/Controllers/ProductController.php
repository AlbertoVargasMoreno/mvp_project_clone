<?php

    namespace App\Controllers;

    use App\Models\ProductModel;

    class ProductController {

        private $product_model;

        public function __construct() {
            $this->product_model = new ProductModel;
        }

        public function index(){
            $results = $this->product_model->indexProduct();
            return view('product/index', $results);
        }

        public function create(){
            return view('product/create', null);
        }

        public function show($id){
            // Página con los detalles de un recurso
            $results = $this->product_model->showProduct($id);
            return view('product/show', $results);
        }

        public function edit($id){
            $results = $this->product_model->showProduct($id);
            return view('product/edit', $results);
        }

        public function store($data){

            if (isset($_POST['available']))
                $available = 1;
            else
                $available = 0;

            $data = array(
                'description'   => $_POST['description'],
                'category'      => $_POST['category'],
                'available'     => $available
            );

            $this->product_model->storeProduct($data);
            
            header("location: ../product/");
        }

        public function update($data){

            echo "hasta aqui ok";

            // Actualizar un recurso 
            // $id =  $_POST['id'];

            // if (isset($_POST['available']))
            //     $available = 1;
            // else
            //     $available = 0;

            // $data = array(
            //     'description'   => $_POST['description'],
            //     'category'      => $_POST['category'],
            //     'available'     => $available
            // );

            // print_r($id);

            // $this->product_model->updateProduct($data, $id);
            
            // header("location: ../product");

        }

        public function destroy($id){
            // Eliminar un recurso
        }
        
    }

?>