<?php
namespace Projeto\TreinaComMestre\Controller\Visitante;

use Projeto\TreinaComMestre\Config\ProcessaRequisicao;
use Projeto\TreinaComMestre\Config\RenderizaHtml;

class HomeController implements ProcessaRequisicao
{
    public function Processa () {
        $html = RenderizaHtml::Renderiza('Visitante/Home.php');
        echo $html;
        exit;
    }
}