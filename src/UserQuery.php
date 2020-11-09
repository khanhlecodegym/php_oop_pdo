<?php

require_once 'config.php';

class UserQuery extends Database
{
    public function register($name, $email, $password)
    {
        $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(1, $name);
            $stmt->bindValue(2, $email);
            $stmt->bindValue(3, $password);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo 'ERROR! ' . $e->getMessage();
            
        }
    }

    public function is_exist($email) {
        $query = 'SELECT email FROM users WHERE email = ?';
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $email);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }
}
