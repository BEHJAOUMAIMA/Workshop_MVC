<?php
include_once "../Model/JokeForm.php";
if(isset($_POST["saveBtn"])){
    $joke_text = $_POST["joke-text"];
    $joke = new JokeForm($joke_text);
    $joke->addJoke();
    header("location: ../public/index.php");
}

if(isset($_POST["updateBtn"])){
    $id = $_POST["Id"];
    $joke_text = $_POST["joke-text"];
    $joke = new JokeForm($joke_text);
    $joke->setId($id);
    $joke->editJoke();
    header("location: ../public/index.php");
}

if(isset($_POST["deleteBtn"])){
    $id = $_POST["Id"];
    $joke_text = $_POST["joke-text"];
    $joke = new JokeForm($joke_text);
    $joke->setId($id);
    $joke->deleteJoke();
    header("location: ../public/index.php");
}