<?php
    class Ingresar extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $data['title'] = 'Ingresar';
            
            $this->views->getView('principal/ingresar/index', $data);
        } 
    }

?>