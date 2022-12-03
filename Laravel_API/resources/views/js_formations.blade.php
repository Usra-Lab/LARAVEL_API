
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatios_JS</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>

<body>

    <div class="container mt-3" >
        <a  class="m-3"   href="/">Retour</a>
        <table class="table table-striped  mt-5">
                        
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

    </div>



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
