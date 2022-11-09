    <?php require_once './models/database.php' ?>
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
                            <tr>
                                <td>967722</td>
                                <td>2021</td>
                                <td>101811859</td>
                                <td>26</td>
                                <td>375</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <div class="form-action">
                                        <a href="./view.php" target="blank" class="btn btn-primary">
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
                        </tbody>
                    </table>
                </div>
                <?php require_once './includes/footer.php'?>
            </div>
            
        </body>
    </html>