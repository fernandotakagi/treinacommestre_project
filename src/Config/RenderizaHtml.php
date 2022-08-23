<?php
namespace Projeto\TreinaComMestre\Config;

class RenderizaHtml
{
    public static function Renderiza ($nomeArquivo) {
        ob_start();
        $caminhoArquivo = '/../../src/View/';
        require __DIR__.$caminhoArquivo.$nomeArquivo;
        $html = ob_get_clean();

        return $html;
    }
}