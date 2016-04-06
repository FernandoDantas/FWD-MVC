<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Personalizando Erros</title>
        <link rel="stylesheet" href="css/reset.css"/>
    </head>
    <body>
        <?php
        
        require ('./_app/Config.inc.php');
        
        trigger_error("Essa é uma NOTICE", E_USER_NOTICE);
        trigger_error("Essa é uma ALERTA", E_USER_WARNING);
        //trigger_error("Essa é uma ERRO", E_USER_ERROR);
        
        PHPErro(FWD_ERROR, "Esse é um erro personalizado!", __FILE__, __LINE__);        
        FWDErro("Esse é um ACCEPT", FWD_ACCEPT);
        
        try {
                
                throw new Exception("Essa é uma Excessão", E_USER_WARNING);
            
            } catch (Exception $e) {
                
                PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
                FWDErro($e->getMessage(), FWD_ACCEPT);
            }

        ?>
    </body>
</html>
