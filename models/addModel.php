<?php 

        $pdo = require './models/database.php';

        /**
             * add
             *
             * @var $statamentCreate to add data

             */

        const ERROR = 'fields required';

        $error = [
                'anacad' => '',
                'matricule' => '',
                'hopital' => '',
                'service' => '',
                'ordre' => '',
                'typePref' => ''
        ];

        $input = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $anacad = $input['anacad'] ?? '';
        $matricule = $input['matricule'] ?? '';
        $hopital = $input['hopital'] ?? '';
        $service = $input['service'] ?? '';
        $ordre = $input['ordre'] ?? '';
        $typePref = $input['typePref'] ?? '';

        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
                if(!$anacad)
                {
                $error['anacad'] = ERROR;
                }

                if(!$matricule)
                {
                $error['matricule'] = ERROR;
                }

                if(!$hopital)
                {
                $error['hopital'] = ERROR;
                }

                if(!$service)
                {
                $error['service'] = ERROR;
                }

                if(!$ordre)
                {
                $error['ordre'] = ERROR;
                }

                if(!$typePref)
                {
                $error['typepref'] = ERROR;
                }

                if(!array_filter($error, fn($e) => $e !== ''))
                {
                $statementCreate = $pdo->prepare('INSERT INTO choixstages (anacad, matricule, hopital, service, ordre, typePref) 
                VALUES (:anacad, :matricule, :hopital, :service, :ordre, :typePref)');
                $statementCreate->bindValue(':anacad', $anacad);
                $statementCreate->bindValue(':matricule', $matricule);
                $statementCreate->bindValue(':hopital', $hopital);
                $statementCreate->bindValue(':service', $service);
                $statementCreate->bindValue(':ordre', $ordre); 
                $statementCreate->bindValue(':typePref', $typePref);               
                $statementCreate->execute();
                }
                
                header('Location: /dashboard.php');

        }

         /**
             * hospital
             *
             * @var $statament to get all hospital in database

             */

        $statement = $pdo->prepare('SELECT * FROM hopitaux');
        $statement->execute();
        $hopitaux = $statement->fetchAll();
        $statement->closeCursor();

        /**
             * service
             *
             * @var $statament to get all service in database

             */

        $statement = $pdo->prepare('SELECT * FROM services');
        $statement->execute();
        $services = $statement->fetchAll();
        $statement->closeCursor();