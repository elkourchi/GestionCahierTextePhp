<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Ajouetr une Seance </title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ajouetr seance
                            <a href="index.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Classe :</label>
                                <input type="text" name="npro" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Date :</label>
                                <input type="text" name="libelle" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Cours</label>
                                <input type="text" name="prix" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Details</label>
                                <input type="text" name="qstock" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Remarques</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Ajouter seance</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>