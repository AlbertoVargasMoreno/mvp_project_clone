<?php

    namespace App\Models;

    use App\Models\ModelBase;

    class ProductModel extends ModelBase {

        private $model_base;

        public function __construct() {
            // Heredamos propiedades y métodos de la clase 'madre'
            parent::__construct();
            $this->model_base = new ModelBase;
        }

        // Muestra una lista de este recurso
        public function indexProduct(){

            try{
                return $this->model_base->index('product');
            } catch (\PDOException $e) {
                echo $e->getMessage();
		    }

        }

        // Muestra un único recurso especificado
        public function showProduct($id){
            
            try{
                return $this->model_base->show('product', $id);
            } catch (\PDOException $e) {
                echo $e->getMessage();
		    }
        }

        // Inserta un nuevo recurso en la base de datos
        public function storeProduct($data){
            
            try{
                $this->model_base->store('product', $data);
            } catch (\PDOException $e) {
                echo $e->getMessage();
		    }
            
        }

        // Actualiza un recurso específico en la base de datos
        public function updateProduct($data, $id){

            try{
                $this->model_base->update('product', $data, $id);
            } catch (\PDOException $e) {
                echo $e->getMessage();
		    }

        }

        // Elimina un recurso específico de la base de datos
        public function destroyProduct($id){
            
        }

        public function __destruct() {
            $this->model_base->closeConnection();
        }

    }

?>