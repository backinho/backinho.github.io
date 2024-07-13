<?php
    class Registrar extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $data['title'] = 'Registrar';
            
            $this->views->getView('principal/registrar/index', $data);
        } 
    }

?>