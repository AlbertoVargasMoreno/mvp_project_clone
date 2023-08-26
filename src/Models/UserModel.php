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

            try{
                $conditions = $min_query !== null ? "WHERE email = :min_query" : "";
                $query_params = [ ':min_query' => "$min_query" ];

                return $this->model_base->index('user', $conditions, $query_params);

            } catch (\PDOException $e) {
                echo $e->getMessage();
		    }

        }

        public function __destruct() {
            $this->model_base->closeConnection();
        }

    }

?>