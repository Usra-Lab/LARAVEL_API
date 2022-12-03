
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formatios_JS</title>
    </head>

    <body>

    <?php
    $formations=json_decode(file_get_contents("http://localhost/FirstApi/API/formations/javascript"));
    ob_start();
    ?>

            <table class="table table-striped">
                            
                            <thead>
                                <tr>
                                <th scope="col">id</th>
                                <th scope="col">nom</th>
                                <th scope="col">description</th>
                                <th scope="col">categorie</th>
                                </tr>
                            </thead>
                <?php foreach($formations as $formation) :?>
                            <tr>
                                <td><?= $formation->id ?></td>
                                <td><?= $formation->libelle ?></td>
                                <td><?= $formation->description?></td>
                                <td><?= $formation->categorie ?></td>
                            </tr>
                            <?php endforeach; ?>
            </table>

    <?php $content=ob_get_clean();require_once("./template.php");?>

    </body>
</html>
