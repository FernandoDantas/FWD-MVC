<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Generic Crud :: Delete</title>
    </head>
    <body>
        <?php
        require ('./_app/Config.inc.php');
        $deleta = new Delete;
        $deleta->ExeDelete('fwd_siteviews_agent', "WHERE agent_id = :id", 'id=6');
        
        if($deleta->getResult()):
            echo "{$deleta->getRowCount()} registro(s) removido com sucesso!<hr>";
        endif;
        
        //var_dump($deleta);
        ?>
    </body>
</html>
