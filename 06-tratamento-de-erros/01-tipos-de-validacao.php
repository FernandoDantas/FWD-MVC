<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>FWD MVC</title>
    </head>
    <body>
        <h3>Tratamento por existencia:</h3>
        <hr>

        <?php
        $string = 'contato';
        $string = 3;
        $string = '';

        if (is_string($string)):
            echo "String é uma string!";
        elseif (!is_string($string)):
            echo "String não é uma String";
        endif;

        echo"<hr>";

        if (!empty($string)):
            echo "String existe e tem valor";
        elseif (isset($string)):
            echo "String existe mais está em branco";
        endif;
        ?>
        <hr><hr>   
        <h3>Tomada de decisão</h3>
        <hr>   

        <?php
        $decisao = 'fernandoweb@fernandowebdeveloper.com.br';

        if (!filter_var($decisao, FILTER_VALIDATE_EMAIL)):
            echo "Email informado é inválido!";
        elseif ($decisao == 'fernando@fernandowebdeveloper.com.br'):
            die('Esse email é restrito');
        else:
            echo "E-mail válido!";
        endif;

        echo " :)";
        ?>
        
        <hr><hr>   
        <h3>Retorno de Flags:</h3>
        <hr> 
        
        <?php
        function Idade($idade = NULL){
            if(!$idade):
                return FALSE;
            elseif(!is_int($idade)):
                return FALSE;
            endif;
            
            return "Voçê nasceu em: " . ( date('Y') - $idade);
        } 
        
        $idade = 'abs';
        $idade = '27';
        $idade = 28;
        
        if(Idade($idade)):
            echo Idade($idade);
        else:
            echo "Erro, informe um int idade";
        endif;
        ?>  
        
        <hr><hr>   
        <h3>Comparação:</h3>
        <hr> 
        
        <?php
        $um = 10;
        $dois = '10';
        
        if($um == $dois):
            echo "Um tem o mesmo valor de dois!";
        elseif($um != $dois):
            echo"Um e dois tem valor diferente!";
        endif;
        
        echo "<hr>";
        
         $um = 10;
        $dois = 10;
        
        if($um === $dois):
            echo "Um e doia tem o mesmo valor e são do mesmo tipo";
            elseif($um !== $dois):
                echo "Um e dois tem valor ou tipo diferente";
        endif;
        
        ?>
        
    </body>
</html>
