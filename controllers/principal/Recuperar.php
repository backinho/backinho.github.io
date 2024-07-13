<?php
    class Recuperar extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $data['title'] = 'Recuperar';
            
            $this->views->getView('principal/recuperar/index', $data);
        } 
    }

?>