<?php
require_once __DIR__.'/../../vendor/autoload.php';

use Projeto\TreinaComMestre\Controller\Aluno\Login\LoginPagina;

return $rotas = [
    '/login' => LoginPagina::class
];