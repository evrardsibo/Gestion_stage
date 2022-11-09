<?php

    require_once './models/database.php';
    const ERROR_FIELDS = 'This fiels is required :';
    const ERROR_MAIL = 'Email unkwon !';
    const ERROR_PASSWORD = 'Passowrd not correct !';
    const ERROR_EMAIL_VALIDE = 'Email is not valide !';

    $error = [
        'email' => '',
        'password' => ''
    ];

    $input = filter_input_array(INPUT_POST, FILTER_SANITIZE_EMAIL);
    $email = $input['email'] ?? '';
    $pwd = $_POST['password'] ?? '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        
        if(!$email)
        {
            $error['email'] = ERROR_FIELDS;
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $error['email'] = ERROR_EMAIL_VALIDE;
        }

        if(!$password)
        {
            $error['password'] = ERROR_PASSWORD;
        }

        if(!array_filter($error, fn($e) => $e !== ''))
        {
            $statementUser = $pdo->prepare('SELECT * FROM users WHERE email=:email');
            $statementUser->bindValue(':email', $email);
            $statementUser->execute();
            $user = $statementUser->fetch();

            if(!$user)
            {
                $error['email'] = ERROR_MAIL;
            }else 
            {
                if(!password_verify($password, $user['password']))
                {
                    $error['password'] = ERROR_PASSWORD;
                }

                header('Location: /dashboard.php');
            }
        }
    }
