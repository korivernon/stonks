<?php

namespace GloomBerg;

class Connection {

    private static $conn;

    public function connect() {
        $params = parse_ini_file('database.ini');

        if ($params === false){
            throw new \Exception("Errpr reading database configuratioon file");
        }
        $conStr = sprintf("psql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
            $params['host'],
            $params['port'],
            $params['database'],
            $params['user'],
            $params['password']);
        $pdo = new \PDO(conStr);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDOO::ERRMODE_EXCEPTION);

        return $pdo;
    }

    public static function get() {
        if (null === static::$conn) {
            static::$conn = new static();
        }

        return static::$conn;
    }

    protected function __construct() {

    }

    private function __clone() {

    }

    private function __wakeup() {

    }
}
?>
