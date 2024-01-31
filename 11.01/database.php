<?php
class Database {
    private $host;
    private $user;
    private $password;
    private $dbname;
    private $connection;

    public function __construct($host, $user, $password, $dbname) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    }

    public function getAllProducts() {
        $query = "SELECT * FROM products";
        return $this->executeQuery($query);
    }

    public function getProductById($id) {
        $query = "SELECT * FROM products WHERE id = :id";
        return $this->executeQuery($query, ['id' => $id]);
    }

    public function getProductByUniqueIndex($index) {
        $query = "SELECT * FROM products WHERE email = :email";
        return $this->executeQuery($query, ['email' => $index]);
    }

    public function getAllUsers() {
        $query = "SELECT * FROM users";
        return $this->executeQuery($query);
    }

    public function getUserById($id) {
        $query = "SELECT * FROM users WHERE id = :id";
        return $this->executeQuery($query, ['id' => $id]);
    }

    public function getUserByUniqueIndex($index) {
        $query = "SELECT * FROM users WHERE email = :email";
        return $this->executeQuery($query, ['email' => $index]);
    }

    private function executeQuery($query, $params = []) {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
?>