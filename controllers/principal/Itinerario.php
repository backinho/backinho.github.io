<?php
    class Itinerario extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $data['title'] = 'Itinerario';
            
            $this->views->getView('principal/itinerario/index', $data);
        } 
    }

?>