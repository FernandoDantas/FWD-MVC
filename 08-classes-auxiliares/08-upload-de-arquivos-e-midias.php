<style type="text/css">
body{background:#fff; padding:30px;}
</style>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Helpers :: Upload de Arquivos e Midias</title>
        <link rel="stylesheet" href="css/reset.css" />
        <style>
            label{display: block; margin-bottom: 15px;}
            label span{display: block;}
        </style>
    </head>
    <body>
        <?php
        require('./_app/Config.inc.php');

        $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if ($form && $form['sendFile']):
            
            $file =$_FILES['arquivo'];
            if ($file['name']):
                $upload = new Upload('uploads/');
                
                var_dump($upload);
            endif;
            
        endif;
        ?>

        <form name="fileForm" action="" method="post" enctype="multipart/form-data">
            <label>
                <span>Arquivo:</span>
                <input type="file" name="arquivo"/>
            </label>

            <label>
                <span>Midia:</span>
                <input type="file" name="midia"/>
            </label>

            <input type="submit" name="sendFile" value="enviar arquivo!"/>
        </form>
    </body>
</html>
