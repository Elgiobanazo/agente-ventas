<?php
namespace Controllers;

use MVC\Router;
use Model\Cliente;


class PaginasController {
    public static function index(Router $router) {
        if(!is_auth()) header('Location: /login');

        $router->render('paginas/index', [
            'titulo' => 'Menú Principal'
        ]);
    }

    public static function cliente_nuevo(Router $router) {
        if(!is_auth()) header('Location: /login');

        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $datos = $_POST;
            $datos['valor_articulo'] = (float)$_POST['valor_articulo'];
            $datos['utilidad'] = (float)$_POST['utilidad']; // Redondear el numero flotante a dos decimales
            $datos['cuotas'] = (int)$_POST['cuotas'];
            $datos['nombres'] = $_POST['nombres'] . ' ' . $_POST['apellidos'];

            $cliente = new Cliente($datos);
            $cliente->sincronizar(['usuario_id' => $_SESSION['user']['cedula']]); 
            $cliente->guardar();

            if($cliente) {
                $cliente->setAlerta('exito', 'Cliente Guardado Correctamente');
            }else { 
                $cliente->setAlerta('Error Al Momento De Guardar Cliente');
            }
        }

        $alertas = Cliente::getAlertas();

        $router->render('paginas/cliente-nuevo', [
            'titulo' => 'Cliente Nuevo',
            'alertas' => $alertas
        ]); 
    }

    public static function mostrar_clientes(Router $router) {
        $cliente = new Cliente(); 
        $clientes = $cliente->all();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Filtrar a los clientes por su nombre y apellido
            $clientes = $cliente->like('nombres', $_POST['buscar']);
        }
        
        $router->render('paginas/mostrar-clientes', [
            'titulo' => 'Mostrar Clientes', 
            'clientes' => $clientes
        ]);
    }

    public static function datos_cliente(Router $router) {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cliente = Cliente::where('id', $_POST['id']);

            $router->render('paginas/datos-cliente', [
                'titulo' => 'Datos Del Cliente',
                'cliente' => $cliente
            ]);
        }
    }

    public static function simulador(Router $router) {
        $router->render('paginas/simulador', [
            'titulo' => 'Simulador De Créditos'
        ]);
    }

    public static function simulador_calculado(Router $router) {        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $resultado = [];

            $resultado['valor'] = round((float)$_POST['valor'], 2);
            $resultado['utilidad'] = round((float)$_POST['utilidad'], 2);
            $resultado['cuotas'] = (int)$_POST['cuotas'];

            $resultado['intereses'] = $resultado['valor']*($resultado['utilidad']/100);
            $resultado['total'] = $resultado['valor']+$resultado['intereses'];
            $resultado['cuota_diaria'] = $resultado['total']/$resultado['cuotas'];

            $router->render('paginas/simulador-calculado', [
                'titulo' => 'Simulador De Créditos',
                'resultado' => $resultado
            ]); 
        }
    }
}