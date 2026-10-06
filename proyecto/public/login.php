<?php
require_once __DIR__ . '/../app/config/config.php';
require_once APP_PATH . '/controllers/AuthController.php';
(new AuthController())->login();
