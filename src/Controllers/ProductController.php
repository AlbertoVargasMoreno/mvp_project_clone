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
            return view('product/index', ['resources' => $results]);
        }

        public function show($id){
            // Página con los detalles de un recurso
            return view('product/show', null);
        }

        public function create(){
            return view('product/create', null);
        }

        public function edit($id){
            return view('product/edit', null);
        }

        public function store($data){
            // Insertar un nuevo recurso
        }

        public function update($data, $id){
            // Actualizar un recurso 
        }

        public function destroy($id){
            // Eliminar un recurso
        }
        
    }

?>