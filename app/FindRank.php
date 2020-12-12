<?php
//finds the users profit
function UserProfit($SSN){
    $stmt = $this->pdo->query(
        'SELECT * FROM Users JOIN( SELECT SUM(soldPrice) - SUM(purchasedPrice) AS PROFIT, UserID FROM Transaction GROUP BY USERID) AS usrprft ON (usrprft.userid = :SSN)'
    );
    $stmt->bindValue(':SSN', $SSN);
    $stmt->execute();
    return $stmt->fetchObject();
}
//finds the organizations profit
function OrgProfit($OrgID){
    $stmt = $this->pdo->query(
        'SELECT u1.:OrgID, SUM(soldPrice) - SUM(purchasedPrice) FROM (SELECT * FROM Users) AS u1 JOIN Transaction ON (u1.orgID - Transaction.OrgID) GROUP BY u1.:OrgID'
    );
    $stmt-> bindValue(':OrgID', $OrgID);
    $stmt->execute();
    return $stmt->fetchObject();
}

function findUserRank($UserID) {
    // prepare the select statement
    $stmt = $this->pdo->query('SELECT TransactionID, Ticker, purchasedPrice, soldPrice, Security_type, Reasoning, OrgID, UserID FROM Transaction WHERE UserID = :UserID');
    //bind value to the UserID parameter
    $stmt->bindValue(':UserID', $UserID);
    //execute the statement();
    $stmt->execute();
    //return the result set as an object
    return $stmt->fetchObject();
}
?>
