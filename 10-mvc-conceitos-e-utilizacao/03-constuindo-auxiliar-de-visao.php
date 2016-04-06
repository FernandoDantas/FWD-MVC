<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>MVC :: Construindo Auxiliar de Visão</title>
    </head>
    <body>
        <?php
        require ('./_app/Config.inc.php');
        $sessao = new Session;
//        View::Load('_mvc/category');
//        
//        $read = new Read;
//        $read->ExeRead('fwd_categories');
//        
//        foreach ($read->getResult() as $cat):            
//            View::Show($cat);
//        endforeach;
//        
//        echo "<h1>REQUEST</h1>";
//        foreach ($read->getResult() as $cat):            
//            View::Request('_mvc/category', $cat);
//        endforeach;
        
        //fwd_siteviews_agent
        $read = new Read;
        $read->ExeRead('fwd_siteviews_agent');
        View::Load('_mvc/navegador');
        
        foreach ($read->getResult() as $nav):
            $nav['agent_lastview'] = date('d/m/Y', strtotime($nav['agent_lastview']));
            View::Show($nav);
        endforeach;
        
        ?>
    </body>
</html>
