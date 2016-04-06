<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Helpers :: Gestão de resultados</title>
    </head>
    <body>
        <?php
        require ('./_app/Config.inc.php');
    
        $Atual = filter_input(INPUT_GET, 'atual', FILTER_VALIDATE_INT);
        $Pager = new Pager('04-gestao-de-resultados.php?atual=', 'Primeira ', 'Última');
        $Pager->ExePager($Atual, 1);
        
        $read = new Read;
       
       $read->ExeRead('fwd_categories', 'LIMIT :limit OFFSET :ofsset', "limit={$Pager->getLimit()}&offset={$Pager->getOffset()}");
        if(!$read->getRowCount()):
            $Pager->ReturnPage();
            echo 'Não existem resultados!<hr>';
        endif;
        
        $Pager->ExePaginator('fwd_categories');
        echo $Pager->getPaginator();
        
        //var_dump($Pager);
        ?>
    </body>
</html>
