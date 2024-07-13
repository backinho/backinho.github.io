<?php
    class Tarifas extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $data['title'] = 'Tarifas';
            
            $this->views->getView('principal/tarifas/index', $data);
        } 
    }

?>