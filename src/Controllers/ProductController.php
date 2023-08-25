<?php
    
    namespace App\Controllers;

    use App\Models\ProductModel;

    class ProductController {
        
        private $product_model;

        public function __construct() {
            $this->product_model = new ProductModel;

            session_start();
        }

        public function index(){
            
            // $min_query -> hace referencia a minimizar la consulta desde la URL, para no traer a todos los registros
            $min_query = explode('?q=',$_SERVER['REQUEST_URI']);
            $min_query = isset($min_query[1]) ? $min_query[1] : "";

            $results = $this->product_model->indexProduct($min_query);
            return view('product/index', $results);

        }

        public function create(){
            
            // Verificamos si existe una variable de sesión 'name'
            if (isset($_SESSION['name'])){
                return view('product/create', null);
            } else {
                header("location: ../user/login");
                die();
            }
        }

        public function show($id){
            // Página con los detalles de un recurso
            $results = $this->product_model->showProduct($id);
            return view('product/show', $results);
        }

        public function edit($id){
            // Verificamos si existe una variable de sesión 'name'
            if (isset($_SESSION['name'])){
                $results = $this->product_model->showProduct($id);
                return view('product/edit', $results);
            } else {
                header("location: ../../user/login");
                die();
            }
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

            $id = $_POST['id'];

            if (isset($_POST['available']))
                $available = 1;
            else
                $available = 0;

            $data = array(
                'description'   => $_POST['description'],
                'category'      => $_POST['category'],
                'available'     => $available
            );

            $this->product_model->updateProduct($data, $id);
            
            header("location: ../product/");

        }

        public function destroy($id){
            // Verificamos si existe una variable de sesión 'name'
            if (isset($_SESSION['name'])){
                // Eliminar un recurso
                $this->product_model->destroyProduct($id);
                header("location: ../../product/");
            } else {
                header("location: ../../user/login");
                die();
            }
        }
        
    }

?>