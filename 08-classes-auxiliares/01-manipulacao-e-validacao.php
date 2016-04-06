<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Hepers :: Manipulação e Validação</title>
    </head>
    <body>
        <?php
        
        require ('./_app/Config.inc.php');        
       //$check = new Check;
        //var_dump($check);
        
        $Email = 'fernando@fernandowbdeveloper.com.br';
        if(Check::Email($Email)):
            echo 'Válido! <hr>';
        else:
            echo 'Inválido! <hr>';
        endif;
        
        $Name = 'Estamos aprendendo PHP. Veja voçê como é';
        echo Check::Name($Name) . '<hr>';
        
        $Data = '20/03/2014 19:46:40';
        $Data = '20/03/2014';
        echo Check::Data($Data) .'<hr>';
        
        $String = 'Olá mundo, estamos estudando PHP';
        Check::Words($String, 8, '<small>continue lendo...</small><hr>');
        
        echo Check::CatByName('eventos') . '<hr>';
        echo Check::UserOnline() . '<hr>';
        
        //echo Check::Image('google.jpg', 'Google!');
        echo Check::Image('google.jpg', 'Google!', '300', 180);
        
        ?>
    </body>
</html>
