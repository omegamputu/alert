<?php

// 
require 'session.php';
$session = new Session();
$session->setFlash('You have made a new Tweet.', 'info');


// On renvoie vers la page d'accueil
header('location:index.php');