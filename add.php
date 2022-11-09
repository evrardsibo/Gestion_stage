<?php require_once './models/addModel.php';?> 
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
                    <form action="./add.php" method="post">
                        <div class="form-control">
                            <label for="anacad">Année Académique *</label>
                            <input type="text" name="anacad" id="anacad">
                            <span class="text-danger"><?= $error['anacad'] ?></span>
                        </div>
                        <div class="form-control">
                            <label for="matricule">Matricule *</label>
                            <input type="text" name="matricule" id="matricule">
                            <span class="text-danger"><?= $error['matricule'] ?></span>
                        </div>
                        <div class="form-control">
                            <label for="hopital">Hopital</label>
                            <select name="hopital" id="hopital">
                                <?php foreach($hopitaux as $id => $hopital) : ?>
                                    <option value="<?= $hopital['id'] ?>"><?= $hopital['nomcourt'] ?></option>
                                <?php endforeach ?>    
                            </select>
                            <span class="text-danger"><?= $error['hopital'] ?></span>
                        </div>
                        <div class="form-control">
                            <label for="service">Service</label>
                            <select name="service" id="service">
                                <?php foreach($services as $id => $service) : ?>
                                    <option value="<?= $service['id'] ?>"><?= $service['nom'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <span class="text-danger"><?= $error['service'] ?></span>
                        </div>
                        <div class="form-control">
                            <label for="ordre">Ordre</label>
                            <input type="text" name="ordre" id="ordre">
                            <span class="text-danger"><?= $error['ordre'] ?></span>
                        </div>                        
                        <div class="form-control">
                            <label for="service">typePref</label>
                            <input type="text" name="typePref" id="typePref">
                            <span class="text-danger"><?= $error['typePref'] ?></span>
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