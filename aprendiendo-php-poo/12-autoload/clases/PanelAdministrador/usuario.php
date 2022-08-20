<?php

    namespace PanelAdministrador;

    class Usuario{

        public $nombre;
        public $email;

        public function __construct(){

            $this->nombre = "Benito Suarez";
            $this->email = "veni@hola.com";

        }

    }