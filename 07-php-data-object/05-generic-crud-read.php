<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>generic Crud :: Read</title>
    </head>
    <body>
        <?php
            require ('./_app/Config.inc.php');
            
            $read = new Read;
            $read->ExeRead('fwd_siteviews_agent', 'WHERE agent_name = :name AND agent_views >= :views LIMIT :limit', "name=Safari&views=10&limit=2");
            $read->setPlaces("name=Chrome&views=10&limit=2");
            
            if($read->getRowCount() >= 1):
                var_dump($read->getResult());
                echo '<hr>';
            endif;
             
            $read->FullRead("SELECT * FROM fwd_siteviews_agent LIMIT :limit OFFSET :offset", "limit=2&offset=2");
           
            
            var_dump($read);
        ?>
    </body>
</html>
