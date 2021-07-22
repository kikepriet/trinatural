<?php include "../db/conexion.php"; ?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>Trinatural</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.html">
                <img src="../images/logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
                Trinatural
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="categoria1.php">Ensaladas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categoria2.php">Platillos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categoria3.php">Sandwiches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categoria4.php">Desayunos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categoria5.php">Postres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categoria6.php">Licuados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categoria7.php">Jugos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categoria8.php">Smoothies</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="display-1 text-center my-5">Smoothies</div>

    


<!-- COMIENZA LISTA DE PRODUCTOS-->
        <?php
            $sql = "select * from productos where categoria = 'smoothies'";
            $result = mysqli_query($conexion, $sql);
            while ($row = mysqli_fetch_row($result)) {
                
        ?>

<div class="container d-flex justify-content-center">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-6">
                    <img src="<?php echo $row[5];?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $row[2];?></h5>
                        <p class="card-text"><?php echo $row[3];?></p>
                        <p class="card-text"><small class="text-muted"><?php echo "$ ".$row[4];?></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- TERMINA LISTA DE PRODUCTOS-->

       

    

    <?php } $conexion->close(); ?>

    <div id="footer">
        <p class="text-center pt-2">Haz tus pedidos al: <br> <strong><a style="text-decoration: none; color: #ffffff;" href="tel:81294-57240">81294-57240</a></strong></p>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>