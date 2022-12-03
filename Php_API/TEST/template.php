<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>TEST</title>
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">ACCUEIL</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="formations.php">FORMATIONS</a>
                    </li>

                   <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CATEGORIES
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="PHPformations.php">PHP</a></li>
                            <li><a class="dropdown-item" href="JSformations.php">JAVA_SCRIPT</a></li>
                        </ul>
            </div>
        </div>
        </nav><br></br>

        <div class="container">
        <?= $content ?>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
