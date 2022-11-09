    <?php require_once './models/showModel.php'?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <?php require_once './includes/head.php'?>
        <title>View</title>
    </head>
        <body>
            <div class="container">
                <?php require_once './includes/header.php'?>
                <div class="content">
                    <h1>View</h1>
                    <div class="card">
                        <table class="table table-inverse table-responsive table-borderless">
                            <tbody>
                                <tr>
                                    <td>Id :</td>
                                    <td><?= $show['id_pref'] ?></td>
                                </tr>
                                <tr>
                                    <td>Anacad :</td>
                                    <td><?= $show['anacad'] ?></td>
                                </tr>
                                <tr>
                                    <td>Matricule :</td>
                                    <td><?= $show['matricule'] ?></td>
                                </tr>
                                <tr>
                                    <td>Hopital :</td>
                                    <td><?= $show['hopital'] ?></td>
                                </tr>
                                <tr>
                                    <td>Service :</td>
                                    <td><?= $show['service'] ?></td>
                                </tr>
                                <tr>
                                    <td>Ordre :</td>
                                    <td><?= $show['ordre'] ?></td>
                                </tr>
                                <tr>
                                    <td>TypePref :</td>
                                    <td><?= $show['typePref'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <?php require_once './includes/footer.php'?>
            </div>            
        </body>
    </html>