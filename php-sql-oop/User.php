<?php
include 'dbconfig.php';

class User {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllDatausers() {
        $stmt = $this->pdo->query("SELECT * FROM datauser");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addUser($name, $email) {
        $stmt = $this->pdo->prepare("INSERT INTO datauser (name, email) VALUES (:name, :email)");
        $stmt->execute(['name' => $name, 'email' => $email]);
    }

}
