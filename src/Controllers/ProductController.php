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
            $min_query = isset($min_query[1]) ? filter_var($min_query[1], FILTER_SANITIZE_FULL_SPECIAL_CHARS) : "";

            $results = $this->product_model->indexProduct($min_query);
            return view('product/index', $results);

        }

        public function create(){
            
            // Verifica la autenticación
            checkAuthentication("../user/login");
            
            return view('product/create', null);
            
        }

        public function show($id){
            // Página con los detalles de un recurso, validación del parámetro $id que debe ser un entero
            $results = $this->product_model->showProduct(filter_var($id, FILTER_VALIDATE_INT));
            return view('product/show', $results);
        }

        public function edit($id){
            
            checkAuthentication("../../user/login");
            
            $results = $this->product_model->showProduct($id);
            return view('product/edit', $results);
        }

        public function store($data){

            checkAuthentication("../user/login");

            if (isset($_POST['available']))
                $available = 1;
            else
                $available = 0;

            $data = array(
                'description'   => filter_var($_POST['description'], FILTER_SANITIZE_SPECIAL_CHARS),
                'category'      => filter_var($_POST['category'], FILTER_SANITIZE_SPECIAL_CHARS),
                'available'     => $available
            );

            $this->product_model->storeProduct($data);
            
            header("location: ../product/");
        }

        public function update($data){

            checkAuthentication("../user/login");

            $id = $_POST['id'];
            if (isset($_POST['available']))
                $available = 1;
            else
                $available = 0;

            $data = array(
                'description'   => filter_var($_POST['description'], FILTER_SANITIZE_SPECIAL_CHARS),
                'category'      => filter_var($_POST['category'], FILTER_SANITIZE_SPECIAL_CHARS),
                'available'     => $available
            );

            $this->product_model->updateProduct($data, $id);            
            header("location: ../product/");

        }

        public function destroy($id){
            // Verifica la autenticación
            checkAuthentication("../../user/login");
            // Eliminar un recurso
            $this->product_model->destroyProduct($id);
            header("location: ../../product/");
        }
        
    }

?>