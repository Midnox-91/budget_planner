<?php
require 'init.php';

echo $twig->render('index.twig', array(
    'title' => 'Startseite'
));