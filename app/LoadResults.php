<?php

function loadResults($UserID) {
    // prepare the select statement
    $stmt = $this->pdo->query('SELECT TransactionID, Ticker, purchasedPrice, soldPrice, Security_type, Reasoning, OrgID, UserID'
    . 'FROM Transaction'
    . 'WHERE UserID = :UserID');
    //bind value to the UserID parameter
    $stmt->bindValue(':UserID', $UserID);
    //execute the statement();
    $stmt->execute();
    //return the result set as an object
    return $stmt->fetchObject();
}
?>
