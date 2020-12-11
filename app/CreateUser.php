<?php

public function insertUser($First, $Last, $Username, $Password, $SSN, $Address, $OrgID){

    $sql = 'INSERT INTO Users(First, Last, Username, Password, SSN, Address, OrgId)'
        . 'VALUES (:First, :Last, :Username, :Password, :SSN, :Address, :OrgID)';

    $stmt = $this->pdo->prepare($sql);

    $stmt->bindValue(':First', $First);
    $stmt->bindValue(':Last', $Last);
    $stmt->bindValue(':Username', $Username);
    $stmt->bindValue(':Password', $Password);
    $stmt->bindValue(':Address', $OrgID);

    stmt->execute();

    // come back 
}
?>
