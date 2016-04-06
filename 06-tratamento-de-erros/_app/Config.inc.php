<?php
//CONFIGURAÇÕES DO SITE ####################
//AUTO LOAD DE CLASSES  ####################
function __autoload($Class){
    
    $dirName = 'class';
    
    if(file_exists("{$dirName}/{$Class}.class.php")):
         require_once("{$dirName}/{$Class}.class.php");
    else:
        die("Erro ao incluir {$dirName}/{$Class}.class.php<hr>");
    endif;
}

//TRATAMENTO DE ERROS ####################
//CSS CONSTANTES :: Mensagens de Erro
define('FWD_ACCEPT','accept');
define('FWD_INFOR','infor');
define('FWD_ALERT','alert');
define('FWD_ERROR','error');

//FWDErro :: Exibe erros lançados :: Front
function FWDErro($ErrMsg, $ErrNo, $ErrDie = NULL){
    $CssClass = ($ErrNo == E_USER_NOTICE ? FWD_INFOR : ($ErrNo == E_USER_WARNING ? FWD_ALERT : ($ErrNo == E_USER_ERROR ? FWD_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\">{$ErrMsg}<span class=\"ajax_close\"></span></p>";
    
    if($ErrDie):
        die();
    endif;
}

//PHPErro :: Personaliza o gatilho do PHP
function PHPErro($ErrNo, $ErrMsg, $ErrFile, $ErrLine){
    $CssClass = ($ErrNo == E_USER_NOTICE ? FWD_INFOR : ($ErrNo == E_USER_WARNING ? FWD_ALERT : ($ErrNo == E_USER_ERROR ? FWD_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\">";
    echo "<b>Erro na Linha: {$ErrLine} ::</b> {$ErrMsg}<br>";
    echo"<small>{$ErrFile}</small>";
    echo "<span class=\"ajax_close\"></span></p>";
    
    
    if($ErrNo == E_USER_ERROR):
        die();
    endif;
}

set_error_handler('PHPErro');
