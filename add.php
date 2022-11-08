<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './includes/head.php' ?>
    <title>Add</title>
</head>
<body>
    <div class="container">
        <?php require_once './includes/header.php' ?>
        <div class="content">
            <div class="block p-20  form-container">
                <h1>Add</h1>
                <form action="" method="post">
                    <div class="form-control">
                        <label for="anacad">Année Académique *</label>
                        <input type="text" name="anacad" id="anacad">
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-control">
                        <label for="matricule">Matricule *</label>
                        <input type="number" name="matricule" id="matricule">
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-control">
                        <label for="hopital">Hopital</label>
                        <select name="hopital" id="hopital">
                            <option value=""></option>
                            <option value="1">EV</option>
                            <option value="2">KE</option>
                        </select>
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-control">
                        <label for="service">Service</label>
                        <select name="service" id="service">
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-control">
                        <label for="ordre">Ordre</label>
                        <input type="number" name="ordre" id="ordre">
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-control">
                        <label for="typepref">TypePref</label>
                        <select name="typepref" id="typepref">
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-action">
                        <a href="./dashboard.php" class="btn btn-danger">Cancel</a>
                        <button class="btn btn-primary" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <?php require_once './includes/footer.php' ?>
    </div>    
</body>
</html>