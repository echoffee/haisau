<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body class="bg-white">
 
    <div class="container">
    
      <div class="card card-login mx-auto mt-5">
    
        <div class="card-header">Login</div>
    
        <div class="card-body">
    
          <form method="post" action="userConnect.php">
    
            <div class="form-group">
    
              <label for="exampleInputEmail1">Username</label>
    
              <input class="form-control"  type="text" name="username">
    
            </div>
    
            <div class="form-group">
    
              <label for="exampleInputPassword1">Password</label>
    
              <input class="form-control"  type="password" name="password">
    
            </div>
    
            <button type="submit" class="btn btn-primary btn-block" name="login_user">Login</button>
    
          </form>
    
          <div class="text-center">
    
            <a class="d-block small mt-3" href="register.php">Register an Account</a>
    
          </div>
    
        </div>
    
      </div>
    
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>