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

        public function edit($idRequest){
            return view('product/edit', null);
        }

        public function store(){
            // Insertar un nuevo recurso
            $data = array(
                'description'   => $_POST['description'],
                'category'      => $_POST['category'],
                'available'     => $_POST['available']
            );

            $this->product_model->storeProduct($data);
            
            header("location: ../product");
        }

        public function update($data, $idRequest){
            // Actualizar un recurso 
        }

        public function destroy($idRequest){
            // Eliminar un recurso
        }
        
    }

?>