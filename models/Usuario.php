<?php

namespace Model;

class Usuario extends ActiveRecord {
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['cedula', 'nombre', 'apellido', 'username', 'password'];
    
    public function __construct($args = []) {
        $this->cedula = $args['cedula'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->username = $args['username'] ?? '';
        $this->password = $args['password'] ?? '';
    }

    // Validar el Login de Usuarios
    public function validarLogin() {
        if(!$this->username) {
            self::$alertas['error'][] = 'El Username es Obligatorio';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password no puede ir vacio';
        }
        return self::$alertas;
    }

    // Hashea el password
    public function hashPassword() : void {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }
}