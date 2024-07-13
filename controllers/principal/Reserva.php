<?php
    class Reserva extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $data['title'] = 'Reserva';
            
            $this->views->getView('principal/reserva/index', $data);
        } 
    }

?>