<?php require_once './controllers/LoginController.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './includes/head.php' ?>
    <link rel="stylesheet" href="./assets/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <?php require_once './includes/header.php' ?>
        <div class="content">
            <div class="block p-20  form-container">
                    <h1>Login</h1>
                    <form action="./" method="post">
                        <div class="form-control">
                            <label for="email">Email *</label>
                            <input type="email" name="email" id="email" value="">
                            <span class="text-danger"><?= $error['email'] ?></span>
                        </div>
                        <div class="form-control">
                            <label for="password">Password *</label>
                            <input type="password" name="password" id="password">
                            <span class="text-danger"><?= $error['password'] ?></span>
                        </div>
                        <div class="form-action">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </form>
            </div> 
        </div>
      <?php require_once './includes/footer.php' ?> 
    </div>
</body>
</html>