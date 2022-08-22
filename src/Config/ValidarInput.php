<?php
namespace Projeto\TreinaComMestre\Config;

class ValidarInput 
{
    public function ValidarEmail ($email) : string {
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);

        return $email;
    }

    public function ValidarString ($string) : string {
        $string = filter_var($string);
        
        return $string;
    }
}
?>