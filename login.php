<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/flatly/bootstrap.min.css" integrity="sha384-qF/QmIAj5ZaYFAeQcrQ6bfVMAh4zZlrGwTPY7T/M+iTTLJqJBJjwwnsE5Y0mV7QK" crossorigin="anonymous">
</head>
<body class="h-100 bg-primary d-flex align-items-center" >
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 mx-auto bg-light p-4">
                <h2 class="text-center text-primary pb-3 mb-3 border-bottom">Login</h2>
                <form action="check.php" method="post">
                    <input type="text" name="username" id="username" placeholder="Nama" class="form-control form-control-lg mb-3">
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control form-control-lg mb-3">
                    <input type="submit" value="Login" class="btn btn-primary btn-lg btn-block">
                </form>
                <p class=" text-sm-center">Username: test, Password:1234</p>
            </div>
        </div>
    </div>    
</body>
</html>