<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="assets/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="assets/script.js" defer></script>
    <title>Mammamia-La Rochelle</title>
</head>
<body>
    <header class="d-flex justify-content-center">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid border-top border-bottom">
                <a class="navbar-brand <?= ($current_page == 'index.php') ? 'active' : '' ?>" href="index.php">Accueil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link  <?= ($current_page == 'menu.php') ? 'active' : '' ?>" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'events.php') ? 'active' : '' ?>" href="events.php">Évènements et privatisations</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link  <?= ($current_page == 'infos.php') ? 'active' : '' ?>" href="infos.php" >Infos pratiques</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    
</body>
</html>