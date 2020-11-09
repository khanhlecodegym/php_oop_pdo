<?php

class Database
{
  private const DBHOST = 'localhost';
  private const DBNAME = 'db_user_system';
  private const DBUSER = 'root';
  private const DBPASS = '';

  private $dsn = 'mysql:host=' . self::DBHOST . ';dbname=' . self::DBNAME . '';
  protected $conn = null;

  public function __construct()
  {
    try {
      $this->conn = new PDO($this->dsn, self::DBUSER, self::DBPASS);
      $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo 'ERROR : ' . $e->getMessage();
    }
  }
}

