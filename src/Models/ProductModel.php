<?php

    namespace App\Models;

    use App\Models\ModelBase;

    class ProductModel extends ModelBase {

        public function __construct() {
            // Heredamos propiedades y métodos de la clase 'madre'
            parent::__construct();            
        }

        // Muestra una lista de este recurso
        public function indexProduct(){

            $db = new ModelBase();
            try{
                $results = $db->index('product');
                return $results;
            } catch (\PDOException $e) {
                echo $e->getMessage();
		    } finally {
                $db->closeConnection();
            }

        }

        // Muestra un único recurso especificado
        public function showProduct($id){
            $db = new ModelBase();
            try{
                $db->show('product', $id);
            } catch (\PDOException $e) {
                echo $e->getMessage();
		    } finally {
                $db->closeConnection();
            }
        }

        // Inserta un nuevo recurso en la base de datos
        public function storeProduct($data){
            
            $db = new ModelBase();
            try{
                $db->store('product', $data);
            } catch (\PDOException $e) {
                echo $e->getMessage();
		    } finally {
                $db->closeConnection();
            }
            
        }

        // Actualiza un recurso específico en la base de datos
        public function updateProduct($data, $id){

        }

        // Elimina un recurso específico de la base de datos
        public function destroyProduct($id){
            
        }

    }

?>