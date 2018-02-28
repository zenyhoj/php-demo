<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>Login Form</title>
</head>
<body>


<!--LOGIN FORM-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 login-form-info">
                <h3>Subscribe to our Newsletter!</h3>
            </div>
            <div class="col-lg-6 login-form">
                <form action="login_process.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
<!--                    <div class="form-check">-->
<!--                        <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                        <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
<!--                    </div>-->
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                </form>

            </div>


            </div>

        </div>


</body>
</html>