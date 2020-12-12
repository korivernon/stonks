<?php

function insertTransaction($Ticker, $purchasedPrice, $soldPrice, $Security_type, $Reasoning, $SSN, $OrgID){

    $sql = 'INSERT INTO Transaction(Ticker, purchasedPrice, soldPrice, Security_type, $Security_type, Reasoning, SSN, OrgID) VALUES (:Ticker, :purchasedPrice, soldPrice, :Security_type, :Reasoning, :SSN, :OrgID)';

    $stmt = $this->pdo->prepare($sql);

    $stmt->bindValue(':Ticker', $Ticker);
    $stmt->bindValue(':purchasedPrice', $purchasedPrice);
    $stmt->bindValue(':soldPrice', $soldPrice);
    $stmt->bindValue(':Security_type', $Security_type);
    $stmt->bindValue(':Reasoning', $Reasoning);

    $stmt->bindValue(':SSN', $SSN);
    $stmt->bindValue(':OrgID', $OrgID);

    $stmt->execute();

    return $this->pdo->lastInsertId('transaction_id_seq');
}
?>
