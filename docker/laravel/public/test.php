<?php

$ms = new mysqli("db", "laravel_user", "laravel_pass", "game_template");
var_dump($ms->connect_error); 

$res = $ms->query('SELECT 1 as test');
var_dump($ms->error);
var_dump($res);