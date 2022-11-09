<?php 

    $pdo = require_once './models/database.php';

    /**
             * choixstages
             *
             * @var $statament to all data in dashboard

             */
    $statement = $pdo->prepare('SELECT * FROM choixstages LIMIT 20');
    $statement->execute();
    $users = $statement->fetchAll();
   

    
    $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $id = $_GET['id'] ?? '';
    $statementShow= $pdo->prepare('SELECT * FROM choixstages WHERE id_pref=:id_pref');
    $statementShow->bindValue(':id_pref', $id);
    $statementShow->execute();
    $show = $statementShow->fetch();
    $statementShow->closeCursor();



    

    