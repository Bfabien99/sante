<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body class="bg-success">
    
    <div class="container-fluid pt-5">
        <div class="row mt-auto">
            <div class="col-12 col-sm-8 mx-auto">
                
                <form action="" class="form bg-white p-4 m-3">
                <h1 class="bg-success p-3 m-2 text-center text-white">Se Connecter</h1>
                    <div class="form-group">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" name="pseudo" placeholder="Your pseudo" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" placeholder="Your password" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-success">Connect <img src="../assets/css/bootstrap/icons/key-fill.svg" alt="activity.svg" width="32" height="20"></button>
                    </div>
                </form>

                <a href="home.php" class="btn btn-danger">Retour</a>
            </div>
        </div>
    </div>

    <footer class="mt-auto p-3 text-center text-white">
        <h6>&copy; 2022 - Projet Sante NAN 5.22 </h6>
    </footer>
</body>
<script src="../assets/css/jquery.js"></script>
<script src="../assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>