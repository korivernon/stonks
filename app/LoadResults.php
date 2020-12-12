<?php
function loadResults($UserID) {
    // prepare the select statement
    $stmt = $this->pdo->query('SELECT TransactionID, Ticker, purchasedPrice, soldPrice, Security_type, Reasoning, OrgID, UserID FROM Transaction WHERE UserID = :UserID');
    //bind value to the UserID parameter

    $stock = [];
    $stmt->bindValue(':UserID', $UserID);
    //execute the statement();
    $stmt->execute();

    while ($row = $stmt->fetch()){
        $stock[] = [
            'Ticker' => $row['Ticker'],
            'purchasedPrice' => $row['purchasedPrice'],
            'soldPrice' => $row['soldPrice'],
            'Security_type' => $row['Security_type'],
            'Profit' => ($row['soldPrice'] - $row['purchasedPrice']),
            'Reasoning' => $row['Reasoning']
        ];
    }
    return $stock; 
}
?>
