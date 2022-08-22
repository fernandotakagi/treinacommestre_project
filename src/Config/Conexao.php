<?php
namespace Projeto\TreinaComMestre\Config;

use PDO;
use PDOException;

trait Conexao
{
    public function CriarConexao () : PDO {
        try {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=db_treinacommestre','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $pdo;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>