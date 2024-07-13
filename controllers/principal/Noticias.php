<?php
    class Noticias extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $data['title'] = 'Noticias';
            
            $this->views->getView('principal/noticias/index', $data);
        } 
    }

?>