<?php

    class User{

        private $id;
        private $user;
        private $password;



        /*GETTERS*/
        public function getId(){
            return $this->id;
        }
        public function getUser(){
            return $this->user;
        }
        public function getPassword(){
            return $this->password;
        }
        /*SETTERS */
        public function setId ( $id ){
            $this -> id = $id;
        }
        public function setUser ( $user ){
            $this -> user = $user;
        }
        public function setPassword ( $password ){
            $this -> password = $password;
        }
    }

?>