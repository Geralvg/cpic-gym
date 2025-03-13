<?php
namespace App\Controller;
use App\Controller\BaseController;
use App\Models;
use App\Models\UsuarioModel;

require_once MAIN_APP_ROUTE ."../controller/baseController.php";
require_once MAIN_APP_ROUTE ."../models/usuarioModel.php";


class LoginController extends BaseController{
    public function __construct(){
        $this->layout ="login_layout";
    }
    public function initLogin(){
        
        if(isset($_POST["txtEmail"]) && isset($_POST["txtPassword"])){
            $email =trim($_POST["txtEmail"]) ?? null ;
        $password =trim($_POST["txtPassword"]) ?? null;
            //el usuario email y contraseña para validad login
            if ($email != "" && $password != "") {
                //Se envia a validar el login
                $usuarioObj = new UsuarioModel();
                $usuarioObj->validarLogin($email, $password);
            }else{
                $data=[
                    "error"=> "El usuario y/o contraseña no deben estar vacios",
                ];
                $this->render('login/login.php', $data);
            }
        }else{
            //se renderiza el formulario
            $this->render('login/login.php');
        }
        
    }
}