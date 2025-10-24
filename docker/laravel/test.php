<?php
$pdo = new PDO("mysql:host=db;dbname=game_template", "laravel_user", "laravel_pass");
var_dump($pdo->query("SELECT 1")->fetch());
