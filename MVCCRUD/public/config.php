<?php
class Connection {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'mvc';
    private function connect()
    {
          $con = new PDO('mysql:host=' . $this->host .';dbname=' . $this->db, $this->user, $this->pass);
          $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
          try {
              return $con;
          } catch (PDOException $e) {
                echo 'Something went wrong with your connection ...!' . $e->getMessage();
          }
    }
    public function getConnection(){
        return $this->connect();
  }
}