<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Login_res.css">
</head>
<body class="text-center">
    <center>
        <div id="wh" class="container">
            <!-- tap -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">LOGIN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">REGISTER</a>
            </li>
            </ul>
            <!-- contant -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form class="form-signin" method="POST" action="sql/login.php">
                    <img class="mb-4" src="" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    <label for="inputUser" class="sr-only">USERNAME</label>
                    <input type="text" id="inputUser" name="inputUser" class="form-control" placeholder="Username" required autofocus>
                    <label for="inputpassword" class="sr-only">Password</label>
                    <input type="password" id="inputpassword" name="inputpassword" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3">
                        <label>
                        <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
                    </form>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form class="form-signin" method="POST" action="sql/register.php">
                        <img class="mb-4" src="" alt="" width="72" height="72">
                        <h1 class="h3 mb-3 font-weight-normal">Please INPUT TEXT</h1>
                        <label for="inputuser" class="sr-only">USERNAME</label>
                        <input type="text" id="inputuser" name="inputuser" class="form-control" placeholder="Username" required autofocus>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">REGISTER</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
                    </form>
                </div>
            </div>
        </div>
    </center>
    
    
    
</body>
</html>