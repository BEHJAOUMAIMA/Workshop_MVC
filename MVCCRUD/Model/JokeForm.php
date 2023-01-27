<?php
include_once "../../config.php";

class JokeForm extends Connection{
    public $id;
    public $joke;
    public function __construct($id=null, $joke=null){
        $this->joke = $joke;     
    }
    function setId($id)
    {
        $this->id = $id;                    
    }
    public function addJoke(){
        $sql = "INSERT INTO `joke`(`texte`) VALUES (?)";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute([$this->joke]);
    }

    public function editJoke(){
        $sql = "UPDATE `joke` SET `texte`=? WHERE ID = ?";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute([$this->joke]);
    }
    public function deleteJoke(){
        $sql = "DELETE FROM `joke` WHERE ID = ?";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute([$this->id]);

    }
}