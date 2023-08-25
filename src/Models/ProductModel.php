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
        public function indexProduct($min_query){

            // description , posteriormente se debe evitar este hardcoding
            $min_query = "WHERE description LIKE '%{$min_query}%'";

            try{
                return $this->model_base->index('product', $min_query);
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
            
            try{
                $this->model_base->destroy('product', $id);
            } catch (\PDOException $e) {
                echo $e->getMessage();
		    }

        }

        public function __destruct() {
            $this->model_base->closeConnection();
        }

    }

?>