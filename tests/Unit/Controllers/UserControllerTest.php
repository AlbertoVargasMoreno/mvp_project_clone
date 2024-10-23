<?php

use PHPUnit\Framework\TestCase;
use App\Controllers\UserController;
use App\Models\UserModel;

class UserControllerTest extends TestCase
{
    private $userController;

    public function setUp(): void
    {
        $this->userController = new UserController();
    }

    public function testAuthWithValidCredentials()
    {
        $_POST['email'] = 'carlos.rangel@hotmail.com';
        $_POST['password'] = 'Carlos7r';
        $_SESSION = [];
        $data = [];
        
        $this->userController->auth($data);

        $this->assertEquals('carlos rangel', $_SESSION['name']);
        $this->assertEquals('carlos.rangel@hotmail.com', $_SESSION['email']);
    }

    public function testAuthWithInvalidPassword()
    {
        $_POST['email'] = 'carlos.rangel@hotmail.com';
        $_POST['password'] = 'wrongpassword';
        $data = [];

        ob_start();
        $result = $this->userController->auth($_POST);
        $output = ob_get_clean();

        $this->assertStringContainsString('Contraseña incorrecta', $output);
        // $this->assertInstanceOf('View', $result);
    }

    public function testAuthWithNonexistentUser()
    {
        $_POST['email'] = 'nonexistent@example.com';
        $_POST['password'] = 'password123';
        $data = [];

        ob_start();
        $result = $this->userController->auth($_POST);
        $output = ob_get_clean();

        $this->assertStringContainsString('No existe el usuario con el email nonexistent@example.com', $output);
    //     $this->assertInstanceOf('View', $result);
    }
}
