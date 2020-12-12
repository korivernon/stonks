<!-- <!doctype html>
<html lang="en">
  <head>
    <title>GloomBerg Stonks</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <h1>Welcome to GloomBerg Stonks</h1>
  <p><b>GloomBerg</b> is your go-to platform when it comes to personal performance and organization analysis.</p>
      <br>
      <p>Log In Below:</p>
      <form action="home.php" method="post">
        Username: <input name="username" type="text">
        <br><br>
        Password: <input name="password" type="password">
        <br><br>
        Organization: <input name="organization" type="text">
        <br><br>
        <input type="submit">
      </form>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> -->

<!-- Tutorial: https://www.youtube.com/watch?v=i16cHmEqJgE -->
<!doctype html>
<html lang="en">
  <head>
    <title>GloomBerg Stonks</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style -->

    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

</head>
  <body>
    <nav class="navbar navbar-expand-md ">
        <div class="container">
            <a href="index.php">GloomBerg Stonks</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary" href="signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Logo Section -->
    
    <!-- Log In -->
    <section class="contact">
        <div class="container animated slideInLeft delay-1s overflow-hidden py-5">
            <div class="text-center py-5">
                <h2 class="py-3">Log In Below</h2>
                <div class="mx-auto heading-line"></div>
            </div>
            <div class="row">
                

                <form class="col-md-8 mx-auto" action="home.php" method="post">
                    <div class="form-group">
                        <label for="Username"></label>
                        <label>Username:</label>
                        <input name="username" class="form-control" type="text" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="Password"></label>
                        <label>Password:</label>
                        <input name="password" class="form-control"  type="password" placeholder="Enter Password">
                        
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">Login</button>
                    
                  </form>
                  
                  
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="text-center py-5">
            <h2 class="py-3">GloomBerg Stonks</h2>
            <div class="mx-auto heading-line"></div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-8 offset-lg-2 text-center">
                <p>
                    Dedicated to <em>you</em>.
                </p>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright text-center py-3 border-top text-muted">
            <p>GloomBerg&copy; 2020</p>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>