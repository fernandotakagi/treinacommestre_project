<?php
namespace Projeto\TreinaComMestre\Config;

class RenderizaHtml
{
    public static function Renderiza ($nomeArquivo) {
        ob_start();
        $caminhoArquivo = '/../../src/View/'.$nomeArquivo;
        $html = ob_get_clean();

        return $html;
    }
}