<?php
class AuthController
{
    public function login(): void
    {
        $tab = 'login';
        require APP_PATH . '/views/login.php';
    }

    public function registro(): void
    {
        $tab = 'registro';
        require APP_PATH . '/views/registro.php';
    }
}
