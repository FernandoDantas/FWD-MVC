<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lançando Excessões</title>
    </head>
    <body>
        <?php        
        $eu = NULL;
        
        if(!$eu):
            $a = new Exception("Eu é null", E_USER_NOTICE);
        endif;
        
        echo $a->getMessage();
        var_dump($a);
        echo "<hr>";
        
        try {
            
        if(!$eu):
            throw new Exception("Eu está null", E_USER_NOTICE);
        endif;
            
            
        } catch (Exception $e) {
            echo "<p>Erro #{$e->getCode()}: {$e->getMessage()}<br>";
            echo "<small>{$e->getFile()}na linha {$e->getLine()}</small></p>";            
      
        }
        
        ?>
    </body>
</html>
