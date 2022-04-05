<?php
    session_start();
    ob_start();

    include "src/lib/config.php";

    if(empty($_SESSION['username']) or empty($_SESSION['password'])){
        echo "<p class='text-lg-center'>Please Login</p>";
        echo "<meta http-equiv='refresh' content='2;url=login.php'>";
    } else {
        define('INDEX', TRUE );

?>


<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arbeiter</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/flatly/bootstrap.min.css" integrity="sha384-qF/QmIAj5ZaYFAeQcrQ6bfVMAh4zZlrGwTPY7T/M+iTTLJqJBJjwwnsE5Y0mV7QK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous">
</head>
<body class="h-100">
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top bg-primary">
        <a href="index.php" class="navbar-brand font-weight-bolder">Arbeiter<span class=" font-weight-lighter">Management</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <nav class="collapse navbar-collapse navbar-dark" id="sidebar">
            <ul class="navbar-nav d-sm-none">
                <li class="nav-item">
                    <a href="?page=dashboard" class="nav-link text-white"> <i class="oi oi-dashboard"></i>  Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="?page=employees" class="nav-link text-white"> <i class="oi oi-person"></i>  Employees Data</a>
                </li>
                <li class="nav-item">
                    <a href="?page=workposition" class="nav-link text-white"> <i class="oi oi-sort-descending"></i>  Position Data</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link text-white"> <i class="oi oi-account-logout"></i>  Exit</a>
                </li>
            </ul>
        </nav>
    </nav>

    <div class="container-fluid h-100">
        <div class="row h-100">
            <nav class="col-3 col-sm-3 bg-dark h-100 p-0 position-fixed d-none d-sm-block">
                
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark">
                        <a href="?page=dashboard" class="nav-link text-white"> <i class="oi oi-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="list-group-item bg-dark">
                        <a href="?page=employees" class="nav-link text-white"> <i class="oi oi-person"></i> Employees Data</a>
                    </li>
                    <li class="list-group-item bg-dark">
                        <a href="?page=workposition" class="nav-link text-white"> <i class="oi oi-sort-descending"></i> Position Data</a>
                    </li>
                    <li class="list-group-item bg-dark">
                        <a href="logout.php" class="nav-link text-white"> <i class="oi oi-account-logout"></i> Exit</a>
                    </li>
                </ul>
            </nav>

            <div class="col col-sm offset-2 offset-sm-3 mb-3">
                <section>
                    <?php
                        include "content.php";
                    ?>
                </section>
            </div>
        </div>
    </div>

    <footer class="bg-primary fixed-bottom">
        <p class="m-2 text-center text-white">
            AltF4m8 <> 2020
        </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php
    }
?>