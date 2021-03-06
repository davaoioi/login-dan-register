<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="login.css">

    <title>Klepon Wahyu</title>
  </head>
  <body>

    <div class="container">
          <form class="form-signin" method="post" action="prosesregister.php">
            <h2 class="form-signin-heading"><center><span class="glyphicon glyphicon-th-large"></span>Register</center></h2>
            <input name="username" id="username" type="input" class="form-control" placeholder="Username" autocomplete="off" required autofocus>
            <input name="nama" id="nama" type="input" class="form-control" placeholder="Nama" autocomplete="off" required autofocus>
            <input name="email" id="email" type="input" class="form-control" placeholder="Email" autocomplete="off" required>
            <input name="password" id="password" type="password" class="form-control" placeholder="Password" autocomplete="off" required autofocus>
            <button class="btn btn-lg btn-danger btn-block" type="submit">Register</button>
            <p>Sudah mempunyai akun ? silahkan <a href="login.html">login</a></p>
          </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>