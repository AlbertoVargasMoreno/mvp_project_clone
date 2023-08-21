<?php

    namespace App\Controllers;

    use App\Models\ProductModel;
    use App\Http\Request;

    class ProductController {

        private $product_model;
        protected $id;

        public function __construct() {
            $this->product_model = new ProductModel;
            $this->id = new Request;
        }

        public function index(){
            $results = $this->product_model->indexProduct();
            return view('product/index', ['resources' => $results]);
        }

        public function show(){
            // Página con los detalles de un recurso
            $id = $this->id->getId();
            $results = $this->product_model->showProduct($id);
            return view('product/show', ['resources' => $results]);
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