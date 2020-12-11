<?php

function insertTransaction($Ticker, $purchasedPrice, $soldPrice, $Security_type, $Reasoning, $OrgID, $UserID){

    $sql = 'INSERT INTO Transaction(Ticker, purchasedPrice, soldPrice, Security_type, $Security_type, Reasoning, OrgID, UserID)'
        . 'VALUES (:Ticker, :purchasedPrice, soldPrice, :Security_type, :Reasoning, :OrgID, :UserID)';

    $stmt = $this->pdo->prepare($sql);

    $stmt->bindValue(':Ticker', $Ticker);
    $stmt->bindValue(':purchasedPrice', $purchasedPrice);
    $stmt->bindValue(':soldPrice', $soldPrice);
    $stmt->bindValue(':Security_type', $Security_type);
    $stmt->bindValue(':Reasoning', $Reasoning);

    $stmt->bindValue(':OrgID', $OrgID);
    $stmt->bindValue(':UserID', $UserID);

    $stmt->execute();

    // how to add a distinct transaction id.. 
    // https://www.postgresqltutorial.com/postgresql-php/insert/
}
?>
