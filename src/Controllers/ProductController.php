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
            $escaped_products = [];
            foreach($results as $index => $product) {
                $escaped_products[$index]["id"]             = htmlspecialchars(intval($product["id"]), ENT_QUOTES, 'UTF-8');
                $escaped_products[$index]["description"]    = htmlspecialchars($product["description"], ENT_QUOTES, 'UTF-8');
                $escaped_products[$index]["category"]       = htmlspecialchars($product["category"], ENT_QUOTES, 'UTF-8');
                $escaped_products[$index]["available"]      = htmlspecialchars(intval($product["available"]), ENT_QUOTES, 'UTF-8');
            }
            return view('product/index', $escaped_products);

        }

        public function create(){
            
            // Verifica la autenticación
            checkAuthentication("../user/login");
            
            return view('product/create', null);
            
        }

        public function show($id){
            // Página con los detalles de un recurso, validación del parámetro $id que debe ser un entero
            $results = $this->product_model->showProduct(filter_var($id, FILTER_VALIDATE_INT));

            $escaped_product["id"]             = htmlspecialchars(intval($results["id"]), ENT_QUOTES, 'UTF-8');
            $escaped_product["description"]    = htmlspecialchars($results["description"], ENT_QUOTES, 'UTF-8');
            $escaped_product["category"]       = htmlspecialchars($results["category"], ENT_QUOTES, 'UTF-8');
            $escaped_product["available"]      = htmlspecialchars(intval($results["available"]), ENT_QUOTES, 'UTF-8');

            return view('product/show', $escaped_product);
        }

        public function edit($id){
            
            checkAuthentication("../../user/login");
            
            $results = $this->product_model->showProduct($id);

            $escaped_product["id"]             = htmlspecialchars(intval($results["id"]), ENT_QUOTES, 'UTF-8');
            $escaped_product["description"]    = htmlspecialchars($results["description"], ENT_QUOTES, 'UTF-8');
            $escaped_product["category"]       = htmlspecialchars($results["category"], ENT_QUOTES, 'UTF-8');
            $escaped_product["available"]      = htmlspecialchars(intval($results["available"]), ENT_QUOTES, 'UTF-8');

            return view('product/edit', $escaped_product);
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