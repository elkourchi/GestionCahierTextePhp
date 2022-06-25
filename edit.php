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

    <title>Modification</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Modification 
                            <a href="index.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['npro']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['npro']);
                            $query = "SELECT * FROM cahiers WHERE npro='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="npro" value="<?= $student['npro']; ?>">

                                    <div class="mb-3">
                                        <label>Classe</label>
                                        <input type="text" name="npro" value="<?=$student['npro'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Date</label>
                                        <input type="text" name="libelle" value="<?=$student['libelle'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Cours</label>
                                        <input type="text" name="prix" value="<?=$student['prix'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Details</label>
                                        <input type="text" name="qstock" value="<?=$student['qstock'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Remarques</label>
                                        <input type="text" name="description" value="<?=$student['description'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Modifier
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4></h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>