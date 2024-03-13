<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='style/style.css'>
    <title><?= $titre ?></title>
</head>

<body class="text-center">

    <!-- Les alerts -->
    <div class="col-12 alert alert-danger d-block d-sm-none text-center" role="alert">Screen X-Small</div>
    <div class="col-sm-12 alert alert-info d-none d-sm-block d-md-none text-center" role="alert">Screen Small ≥576px</div>
    <div class="col-md-12 alert alert-success d-none d-md-block d-lg-none text-center" role="alert">Screen Medium ≥768px</div>
    <div class="col-lg-12 alert alert-warning d-none d-lg-block d-xl-none text-center" role="alert">Screen Large ≥992px</div>
    <div class="col-xl-12 alert alert-dark d-none d-xl-block d-xxl-none text-center" role="alert">Screen X-Large ≥1200px</div>
    <div class="col-xxl-12 alert alert-secondary d-none d-xxl-block text-center" role="alert">Screen XX-Large ≥1400px</div>


    <!-- Nav Barre -->
    <nav class="navbar navbar-expand-lg maNav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link mx-3" aria-current="page" href="index.php">
                            <img src="../Images/Menuiz Man.png" alt="Logo" class="logonav d-md-none d-lg-block">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <h1 class="my-3"><?= $titre ?></h1>