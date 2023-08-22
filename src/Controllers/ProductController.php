<?php

    namespace App\Controllers;

    use App\Models\ProductModel;

    class ProductController {

        private $product_model;
        protected $resource_id;

        public function __construct() {
            $this->product_model = new ProductModel;

            // $this->set_resource_id();
        }

        // public function set_resource_id(){
        //     $this->resource_id = $_GET['id'];
        // }

        // public function get_resource_id(){
        //     return $this->resource_id;
        // }

        public function index(){
            $results = $this->product_model->indexProduct();
            return view('product/index', ['resources' => $results]);
        }

        public function create(){
            return view('product/create', null);
        }

        public function show($id){
            // Página con los detalles de un recurso
            echo $id;
            // $results = $this->product_model->showProduct($id);
            // return view('product/show', ['resources' => $results]);
        }

        public function edit($id){
            $results = $this->product_model->showProduct($id);
            return view('product/edit', ['resources' => $results]);
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
            
            header("location: ../product");
        }

        public function update($data, $id){

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