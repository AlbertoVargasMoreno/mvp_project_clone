<?php

    namespace App\Controllers;

    use App\Models\ProductModel;
    use App\Http\Request;

    class ProductController {

        private $product_model;
        protected $idRequest;

        public function __construct() {
            $this->product_model = new ProductModel;
            $this->idRequest = new Request;
        }

        public function index(){
            $results = $this->product_model->indexProduct();
            return view('product/index', ['resources' => $results]);
        }

        public function show(){
            // Página con los detalles de un recurso
            $idRequest = $this->idRequest->getIdRequest();
            $results = $this->product_model->showProduct($idRequest);
            return view('product/show', ['resources' => $results]);
        }

        public function create(){
            return view('product/create', null);
        }

        public function edit(){
            $idRequest = $this->idRequest->getIdRequest();
            $results = $this->product_model->showProduct($idRequest);
            return view('product/edit', ['resources' => $results]);
        }

        public function store(){

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

        public function product(){

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

        public function destroy($idRequest){
            // Eliminar un recurso
        }
        
    }

?>