<?php

    require_once ("core/crud.php");

    class usuario extends Crud{
        public function __construct(
            public int $id = 0,
            public string $nombre = "",
            public string $apellido = "",
            public int $edad = 0,
            public string $telefono = ""

        ){
            parent::__construct("usuario");
        }


        public function insertar(){
            $this->create("id,nombre,apellido,edad,telefono","?,?,?,?,?",
            [$this->id,$this->nombre, $this->apellido,$this->edad,$this->telefono]);
        }

        public function actualizar(){
            $this->update("nombre=?, apellido=?, edad=?, telefono=?",
            [$this->nombre, $this->apellido,$this->edad,$this->telefono,$this->id]);
        }
    }


?>