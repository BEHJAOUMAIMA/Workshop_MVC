<?php
include_once "../../config.php";

class JokeList extends Connection{
    public $id;
    public $joke;
    public function __construct($id = null, $joke=null){
        $this->id = $id;
        $this->joke = $joke;
    }

    public function readJokes(){
        $sql = "SELECT * FROM `joke`";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}