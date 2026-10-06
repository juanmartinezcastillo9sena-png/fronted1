<?php
require_once APP_PATH . '/models/ServicioModel.php';

class InicioController
{
    public function index(): void
    {
        $modelo    = new ServicioModel();
        $servicios = $modelo->todos();
        $pasos     = $modelo->pasos();
        require APP_PATH . '/views/inicio.php';
    }
}
