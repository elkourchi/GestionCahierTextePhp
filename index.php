<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Gestion du Cahier du texte</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Cahier du Texte
                            <a href="create.php" class="btn btn-primary float-end">Ajouetr Seance</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Date</th>
                                    <th>Cours</th>
                                    <th>Datails</th>
                                    <th>Remarques</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM cahiers";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $student['npro']; ?></td>
                                                <td><?= $student['libelle']; ?></td>
                                                <td><?= $student['prix']; ?></td>
                                                <td><?= $student['qstock']; ?></td>
                                                <td><?= $student['description']; ?></td>
                                                <td>
                                                    <a href="view.php?npro=<?= $student['npro']; ?>" class="btn btn-info btn-sm">Montrer</a>
                                                    <a href="edit.php?npro=<?= $student['npro']; ?>" class="btn btn-success btn-sm">Modifier</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student" value="<?=$student['npro'];?>" class="btn btn-danger btn-sm">Supprimer</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5>  </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>