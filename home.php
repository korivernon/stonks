<!doctype html>
<html lang="en">
  <head>
    <title>GloomBerg Stonks Homepage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <h1>Welcome to GloomBerg Stonks</h1>
  <?php
    $uname = $_POST["username"];
    echo "Hello, " . $uname ;
    // if there is no user then do not direct them here...
    $org = $_POST["organization"];
    echo "<br>";
    if ($org == NULL){
        echo "You do not belong to an organization :(\n";
    } else {
        echo "You belong to " . $org . "\n";

        // now let's go into analytics

        echo "<br><br><h1>ORGANIZATION STATISTICS</h1>";
        
        //organization rank
        echo "<br>";
        $orgRank = 10;
        echo "<b>Your organization is ranked: </b>" . $orgRank;
        echo "<br>";

        //organization profit
        $orgProfit = 1000000;
        echo "<b>Your Organization profit is $</b>" . $orgProfit;
        echo "<br>";
    }
    echo "<br><br><h1>PERSONAL STATISTICS</h1>";

    //organization rank
    echo "<br>";
    $pRank = 1069;
    echo "<b>You are ranked: </b>" . $pRank;
    echo "<br>";

    //organization profit
    $pProfit = 3083;
    echo "<b>Your personal profit is $</b>" . $pProfit;
    echo "<br>";

    echo "<br><br><h1>PERFROMANCE STATS</h1>";
    
    $performance = 40.7;
    if ($pProfit > 0) {
        echo "Your performance this year is fantastic! ";
        echo "With " . $performance . "% positive this year, you're going places!";
    } else {
        echo "You are lacking my friend. Maybe pick up something else... ";
        echo "With " . $performance . "% negative this year, you're NOT going places!";
    }
  ?>
  
  <br><br>
  <a href="index.php"><button>Log Out</button></a>
  <a href="trades.php"><button>My Trades</button></a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>