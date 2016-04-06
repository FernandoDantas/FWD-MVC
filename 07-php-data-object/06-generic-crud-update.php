<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Generic Crud :: Update</title>
    </head>
    <body>
        <?php
        require('./_app/Config.inc.php');
        
        $Dados = ['agent_name' => 'Opera', 'agent_views' => '50'];
        
        $update = new Update;
        $update->ExeUpdate('fwd_siteviews_agent', $Dados, "WHERE agent_id = :id", 'id=6');
        
        if($update->getResult()):
            echo "{$update->getRowCount()} dado(s) atualizados com sucesso!<hr>";
        endif;
        
        //var_dump($update);
        ?>
    </body>
</html>
