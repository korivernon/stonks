<?php
    function getAccount($UserID, $Password) {
        $stmt = $this->pdo->query('SELECT * FROM Users WHERE UserID = :UserID AND Password = :Password');
        $account = [];
        while ($row = $stmt->fetch()) {
            $account[] = [

                'First' => $row['First'],
                'Last' => $row['Last'],
                'Username' => $row['Username'],
                'Password' => $row['Password'],
                'SSN' => $row['SSN'],
                'Address' => $row['Address'],
                'OrgID' => $row['OrgID']
            ];
        }
        return $account;
    }

?>
