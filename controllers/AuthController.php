<?php

namespace Controllers;

// use Classes\Email;
use Model\Usuario;
use MVC\Router;

class AuthController {
    public static function login (Router $router) : void {
        if(is_auth()) header('Location: /');
        
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {  
            $usuario = new Usuario($_POST);

            $alertas = $usuario->validarLogin();
            
            if(empty($alertas)) {
                // Verificar quel el usuario exista
                $usuario = Usuario::where('username', $usuario->username);

                
                if(!$usuario) {
                    Usuario::setAlerta('error', 'Username o Contraseña incorrecto');
                } else {
                    // El Usuario existe
                    if( password_verify($_POST['password'], $usuario->password) ) {
                    
                        // Iniciar la sesión
                        session_start();    
                        $_SESSION['user']['cedula'] = $usuario->cedula;
                        $_SESSION['user']['nombre'] = $usuario->nombre;
                        $_SESSION['user']['apellido'] = $usuario->apellido;
                        
                        header('Location: /');
                        return;

                    } else {
                        Usuario::setAlerta('error', 'Username o Contraseña incorrecto');
                    }
                }
            }
        }

        $alertas = Usuario::getAlertas();
        
        // Render a la vista 
        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión',
            'alertas' => $alertas
        ]);
    }

    public static function logout() : void {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();
            $_SESSION['user'] = [];
            header('Location: /login');
        }
    }
}