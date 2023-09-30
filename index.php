<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css e js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- css e js -->

    <link rel="stylesheet" href="src/css/css.css">

    <title>Popular Farma</title>
</head>

<body class="w-100 m-0 p-0">


    <div class="position-fixed bottom-0 z-3 w-100 d-block d-md-none " style="background-color: red; height: 80px;">
        <nav class="navbar w-100 top-0 text-center justify-content-center z-3">
            <?php include('layouts/nav-mobile.php'); ?>
        </nav>
    </div>

    <div class="container-fluid text-white w-100 d-none d-md-block p-2" style="background-color: red;">
        <div class="row d-none d-md-block d-sm-block">
            <?php include('layouts/head.php'); ?>
        </div>
        <hr class="d-none d-md-block">
        <div class="container">
            <div class="row text-center justify-content-center" style="height: 100px;">
                <div class="col-sm-10 ms-5" id="nao-sei" style="height: 100px;">
                    <?php include('layouts/nav-web.php') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="position-fixed top-0 z-1 w-100 d-block d-md-none " style="background-color: red; height: 100px;">
        <div class="row text-center" id="logo-mobile">
            <div class="col-12 col-sm-12 m-1">
                <a href="#">
                    <img class="image-fluid" src="src/images/logo nuvem shop.png" alt="" height="75" width="150">
                </a>
            </div>
        </div>
    </div>
    <!--div class="container">
         <?php //include('layouts/carrossel.php'); 
            ?>
    </div-->
    <main class="container-fluid">
        <?php include('layouts/marcas.php'); ?>
        <hr class="d-none d-md-block">
        <?php include('layouts/produtos.php'); ?>
    </main>
    <?php include('layouts/footer.php'); ?>