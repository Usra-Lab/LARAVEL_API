<?php

define("URL",str_replace("index.php","",(isset($_SERVER['HTTPS'])?"https":"http")."://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));
    function getFormations(){
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=info","root", "");
    $select="select f.id,f.libelle,f.description,f.image,c.libelle as categorie from formation f inner join categorie c on f.categorie_id=c.id";
    $resultat=$pdo->prepare($select);
    $resultat->execute();
    $formations=$resultat->fetchAll(PDO::FETCH_ASSOC);
    for($i=0;$i<count($formations);$i++){
        $formations[$i]['image']=URL."images/cours/".$formations[$i]['image'];
    }
    sendJSON($formations);
}

 function getFormationsByCategorie($categorie){
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=info","root", "");
    $select="select f.id,f.libelle,f.description,f.image,c.libelle as categorie from formation f inner join categorie c on f.categorie_id=c.id
     where c.libelle=:categorie";
    $resultat=$pdo->prepare($select);
    $resultat->bindValue(":categorie",$categorie,PDO::PARAM_STR);
    $resultat->execute();
    $formations=$resultat->fetchAll(PDO::FETCH_ASSOC);
    for($i=0;$i<count($formations);$i++){
        $formations[$i]['image']=URL."images/cours/".$formations[$i]['image'];
    }
    sendJSON($formations);

}
function getFormationById($id){
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=info","root", "");
    $select="select f.id,f.libelle,f.description,f.image,c.libelle from formation f inner join categorie c on f.categorie_id=c.id
    where f.id=:id";
    $resultat=$pdo->prepare($select);
    $resultat->bindValue(":id",$id,PDO::PARAM_INT);
    $resultat->execute();
    $formations=$resultat->fetchAll(PDO::FETCH_ASSOC);
    for($i=0;$i<count($formations);$i++){
        $formations[$i]['image']=URL."images/cours/".$formations[$i]['image'];
    }
    sendJSON($formations);

}
function  sendJSON($infos){
    echo json_encode($infos,JSON_UNESCAPED_UNICODE);
}

