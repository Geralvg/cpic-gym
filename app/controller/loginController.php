<?php
namespace App\Controller;
use App\Controller\BaseController;
use App\Models;
use App\Models\UsuarioModel;

require_once MAIN_APP_ROUTE . "../controller/baseController.php";
require_once MAIN_APP_ROUTE . "../models/usuarioModel.php";


class LoginController extends BaseController
{
    public function __construct()
    {
        $this->layout = "login_layout";
    }
    public function initLogin()
    {

        if (isset($_POST["txtEmail"]) && isset($_POST["txtPassword"])) {
            $email = trim($_POST["txtEmail"]) ?? null;
            $password = trim($_POST["txtPassword"]) ?? null;
            //el usuario email y contraseña para validad login
            if ($email != "" && $password != "") {
                //Se envia a validar el login
                $usuarioObj = new UsuarioModel();
                $resp= $usuarioObj->validarLogin($email, $password);
                if ($resp) { //usuario logueado correctamente
                    header("Location: /programa/index");
                }else {
                    $data = [
                        "error" => "El usuario y/o contraseña estan incorrecctos",
                    ];
                }
                
            } else {
                $data = [
                    "error" => "El usuario y/o contraseña no deben estar vacios",
                ];
            }
            $this->render('login/login.php', $data);
        } else {
           
            //se renderiza el formulario
            $this->render('login/login.php');
        }

    }

    public function logout (){
        session_destroy();
        header('Location: /login/init');
    }

    public function testHash () {
        $password = '1234';
        $passwordHased = password_hash($password, PASSWORD_DEFAULT);
        echo $password;
        echo '<br>';
        echo $passwordHased;
        if (password_verify($password, $passwordHased)) {
            echo '<br>contraseña valida<br>';
        }else{
            echo 'contraseña incorrecta';
        }
    }
}