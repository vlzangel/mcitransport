<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login</title>

        <link href="admin/recursos/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="admin/recursos/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="admin/recursos/css/sb-admin.css" rel="stylesheet">
    </head>

    <body class="bg-dark">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form id="login">
                        <div class="form-group">
                            <label for="user">Email address</label>
                            <input class="form-control" id="user" name="user" type="text" title="Ex: example@mail.com" placeholder="Enter email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"  required />
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input class="form-control" id="pass" name="pass" type="password" placeholder="Password" required />
                        </div>
                        <input type="submit" class="btn btn-primary btn-block" />
                    </form>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="register.html">Register an Account</a>
                        <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="admin/recursos/vendor/jquery/jquery.min.js"></script>
        <script src="admin/recursos/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="admin/recursos/vendor/jquery-easing/jquery.easing.min.js"></script>

        <script src="admin/recursos/js/login.js"></script>

    </body>
</html>
