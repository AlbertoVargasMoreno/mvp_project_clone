<?php

    namespace App\Controllers;

    use App\Models\UserModel;

    class UserController {

        private $user_model;

        public function __construct() {
            $this->user_model = new UserModel;
        }

        public function login(){
            // Vista de formulario de acceso
            return view('user/login', null);
        }

        public function auth($data){

            $data = array(
                'email'     => filter_var($_POST['email'], FILTER_VALIDATE_EMAIL),
                'password'  => $_POST['password']
            );
          
            $results = $this->user_model->indexUserAuth($data['email']);

            if (count($results) == 1) {

                if (password_verify($data['password'], $results[0]['password'])) {

                    session_start();
                    $_SESSION['name'] = $results[0]['name'];
                    $_SESSION['email'] = $results[0]['email'];
                    
                    header("location: ../");
                    die();

                } else {
                    echo "Contraseña incorrecta, por favor intente de nuevo";
                    return view('user/login', null);
                }

            } else {
                echo "No existe el usuario con el email {$data['email']}";
                return view('user/login', null);
            }
            
        }

        public function logout(){
            session_start();
            session_destroy();
            header("location: ../");
        }

    }

?>