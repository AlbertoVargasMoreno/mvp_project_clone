<?php

    namespace App\Models;

    use App\Models\ModelBase;

    class UserModel extends ModelBase{

        private $model_base;

        public function __construct() {
            parent::__construct();
            $this->model_base = new ModelBase;
        }

        // Muestra una lista de este recurso
        public function indexUserAuth($min_query){

            // email , posteriormente se debe evitar este hardcoding
            $min_query = "WHERE email = '{$min_query}'";
            
            try{
                return $this->model_base->index('user', $min_query);
            } catch (\PDOException $e) {
                echo $e->getMessage();
		    }

        }

        public function __destruct() {
            $this->model_base->closeConnection();
        }

    }

?>