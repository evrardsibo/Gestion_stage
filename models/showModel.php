<?php

    $pdo = require_once './models/database.php';
            /**
             * choixstages
             *
             * @var $statamentShow to show one

             */
            
    $statementShow= $pdo->prepare('SELECT * FROM choixstages WHERE id_pref=:id_pref');
    $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $id = $_GET['id'];
    $statementShow->bindValue(':id_pref', $id);
    $show = $statementShow->fetch();
    $statementShow->closeCursor();

   