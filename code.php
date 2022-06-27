<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM cahiers WHERE classe='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Séance supprimée avec succè";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Erreur dans la suppression";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['classe']);
    $name = mysqli_real_escape_string($con, $_POST['date']);
    $email = mysqli_real_escape_string($con, $_POST['cours']);
    $phone = mysqli_real_escape_string($con, $_POST['details']);
    $course = mysqli_real_escape_string($con, $_POST['description']);

    $query = "UPDATE cahiers SET classe='$student_id', date='$name', cours='$email', details='$phone', description='$course' WHERE classe='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Séance mis à jour avec succès";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Erreur dans la modification";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['classe']);
    $name = mysqli_real_escape_string($con, $_POST['date']);
    $email = mysqli_real_escape_string($con, $_POST['cours']);
    $phone = mysqli_real_escape_string($con, $_POST['details']);
    $course = mysqli_real_escape_string($con, $_POST['description']);

    $query = "INSERT INTO cahiers (classe,date,cours,details,description) VALUES ('$student_id','$name','$email','$phone','$course')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Séance créée avec succè";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Erreur dans l'ajout";
        header("Location: create.php");
        exit(0);
    }
}

?>