<?php
require_once __DIR__.'/../../vendor/autoload.php';

use Projeto\TreinaComMestre\Controller\Aluno\Login\LoginPaginaController;
use Projeto\TreinaComMestre\Controller\Visitante\HomeController;

return $rotas = [
    '/' => HomeController::class,
    '/login' => LoginPaginaController::class
];