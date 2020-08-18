<?php

    class Usuario{
        private $db;

        public function __construct(){
            $this->db = new Base;
        }

        public function obtenerUsuarios(){
            $this->db->query('SELECT * FROM usuarios');
            $resultados = $this->db->registros();
            return $resultados;
        }

        public function agregarUsuario($datos){
            $this->db->query('INSERT INTO usuarios (nombre, email, telefono) VALUES (:nombre, :email, :telefono)');

            //vincular valores
            $this->db->bind(':nombre',$datos['nombre']);
            $this->db->bind(':email',$datos['email']);
            $this->db->bind(':telefono',$datos['telefono']);

            //Ejecutar
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
        public function obtenerUsuario($id){
            $this->db->query('SELECT * FROM usuarios WHERE id_usuario= :id');
            $this->db->bind(':id',$id);
            $fila=$this->db->registro();
            return $fila;
        }
        public function actualizarUsuario($datos){
            $this->db->query('UPDATE usuarios SET nombre =:nombre, email = :email, telefono = :telefono WHERE id_usuario = :id');
            //vincular valores
            $this->db->bind('id',$datos['id_usuario']);
            $this->db->bind('nombre',$datos['nombre']);
            $this->db->bind('email',$datos['email']);
            $this->db->bind('telefono',$datos['telefono']);
            //ejecutar
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }   
        public function borrarUsuario($datos){
            $this->db->query('DELETE FROM usuarios WHERE id_usuario= :id');
            //vincular valores
            $this->db->bind('id',$datos['id_usuario']);
            
            //ejecutar
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }   
    }


?>