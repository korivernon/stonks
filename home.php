<?php            
    require 'vendor/autoload.php';

    use GloomBerg\Connection as Connection;
    use GloomBerg\GetAcc as GetAcc;
    use GloomBerg\CreateUser as CreateUser;
    use GloomBerg\FindRank as FindRank;
?>
<!doctype html>
<html lang="en">
  <head>
    <title>GloomBerg Stonks Terminal</title>
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
                    
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-secondary" href="index.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section class="home">
        <div class ="container-fluid w-50 py-3">
            <!-- Add Type at the Top -->
            <!-- Logo -->

            <h1 class="bold text-center pb-3 animated fadeIn">GloomBerg Stonks</h1>
        </div>
            <div class="animated fadeIn delay-1s mx-auto heading-line"></div>
        <div class="animated fadeIn delay-1s container w-75 py-3">
            <p class="py-3 text-justify">

            

            <?php
                try {

                    $pdo = Connection::get()->connect();
                    $newUser = new CreateUser($pdo);

                    // insert a user into the users table

                    $fname = $_POST["firstname"];
                    $lname = $_POST["lastname"];
                    $orgid = $_POST["orgid"];
                    $ssn = $_POST["ssn"];
                    $uname = $_POST["username"];
                    $password = $_POST["password"];

                    //insert new user

                    $newUser->insertUser($fname,$lname, $umame, $password, $ssn, $address, $orgid);
                    
                    //getting the information with the user and password
                    try{
                        $storeProc = new StoreProc($pdo);
                        $account = $storeProc->getAccount($uname, $password);

                        echo "Hello, " . htmlspecialchars($account['First']);

                        
                        if ($orgID == NULL){
                            
                            echo "You do not belong to an organization :(\n";
                        } else {
                            echo "<br><br><h1>ORGANIZATION STATISTICS</h1>";
                            echo "You belong to " . $orgID . "\n";

                            $orgProfit = $storeProc->OrgProfit($orgid);
                            echo "<b>Your Organization profit is $</b>" . $orgProfit;
                            echo "<br>";
                        }
                        echo "<br><br><h1>PERSONAL STATISTICS</h1>";

                        //organization profit
                        $pProfit = $storeProc->UserProfit($ssn);
                        echo "<b>Your personal profit is $</b>" . $pProfit;
                        echo "<br>";
                        echo "<br><br><h1>PERFORMANCE STATS</h1>";
                    
                        if ($pProfit > 0) {
                            echo "Your performance this year is fantastic! ";
                        } else {
                            echo "You are lacking my friend. Maybe pick up something else... ";    
                        }
                            
                    }catch (\PDOException $e) {
                        echo 'unable to load your account. create one <a href="signup.php">here</a> or try again <a href="login.php">here</a>.';
                    }
            ?>             
            </p>
            
            <a href="trades.php">
                <button class="animated fadeIn delay-3s btn btn-lg btn-outline-secondary">My Trades</button>
            </a>
            <a href="logtrade.php">
                <button class="animated fadeIn delay-3s btn btn-lg btn-secondary">Log Trade</button>
            </a>
        </div>
    </section>



    <!-- Footer -->
    <footer class="footer">
        <div class="text-center py-5">
            <h2 class="py-3">GloomBerg Stonks</h2>
            <div class="mx-auto heading-line"></div>
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