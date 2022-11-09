    <?php require_once './Models/ViewModel.php' ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <?php require_once './includes/head.php' ?>
        <link rel="stylesheet" href="./assets/css/table.css">
        <title>Dashboard</title>
    </head>
        <body>
            <div class="container">
                <?php require_once './includes/header.php'?>
                <div class="content">
                    <div class="add">
                        <a href="/add.php" target="blank" class="btn btn-primary">Add</a>
                    </div>
                    <table class="table-style">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Anacad</th>
                                <th>Matricule</th>
                                <th>Hopital</th>
                                <th>Service</th>
                                <th>Ordre</th>
                                <th>TypePref</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach( $users as $user) : ?>
                            <tr>
                                <td><?= $user['id_pref'] ?></td>
                                <td><?= $user['anacad'] ?></td>
                                <td><?= $user['matricule'] ?></td>
                                <td><?= $user['hopital'] ?></td>
                                <td><?= $user['service'] ?></td>
                                <td><?= $user['ordre'] ?></td>
                                <td><?= $user['typePref'] ?></td>
                                <td>
                                    <div class="form-action">
                                        <a href="/view.php?id=<?= $show['id_pref'] ?>" class="btn btn-primary">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="./update.php" target="blank" class="btn btn-secondary">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <?php require_once './includes/footer.php'?>
            </div>
            
        </body>
    </html>