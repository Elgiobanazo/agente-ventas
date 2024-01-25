<?php
namespace Model;

class Cliente extends ActiveRecord {
    protected static $tabla = 'clientes';
    protected static $columnasDB = ['id', 'cedula', 'nombres', 'direccion', 'barrio', 'telefono', 'valor_articulo', 'utilidad', 'cuotas', 'usuario_id'];

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->cedula = $args['cedula'] ?? '';
        $this->nombres = $args['nombres'] ?? '';
        $this->direccion = $args['direccion'] ?? '';
        $this->barrio = $args['barrio'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->valor_articulo = $args['valor_articulo'] ?? '';
        $this->utilidad = $args['utilidad'] ?? '';
        $this->cuotas = $args['cuotas'] ?? '';
        $this->usuario_id = $args['usuario_id'] ?? '';
    }
}

