<?php

require_once("./fonctions.php");
if(!empty($_GET['demande']))
{
    $url=explode("/",filter_var($_GET['demande'],FILTER_SANITIZE_URL));
    switch ($url[0]){
        case "formations" :
            if(empty($url[1])){
                getFormations();
            }else{
                getFormationsByCategorie($url[1]);
            }
        break;
        case "formation" :
            if(!empty($url[1])){
                              getFormationById($url[1]) ;
            }else{
                echo "il faut rensigner le num de la formation";
            }
        break;
        default : echo "resultat non trouvé";
    }
}else{
    echo "resultat non trouve essayer de specefier";
}