<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM cahiers WHERE npro='$student_id' ";
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
    $student_id = mysqli_real_escape_string($con, $_POST['npro']);
    $name = mysqli_real_escape_string($con, $_POST['libelle']);
    $email = mysqli_real_escape_string($con, $_POST['prix']);
    $phone = mysqli_real_escape_string($con, $_POST['qstock']);
    $course = mysqli_real_escape_string($con, $_POST['description']);

    $query = "UPDATE cahiers SET npro='$student_id', libelle='$name', prix='$email', qstock='$phone', description='$course' WHERE npro='$student_id' ";
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
    $student_id = mysqli_real_escape_string($con, $_POST['npro']);
    $name = mysqli_real_escape_string($con, $_POST['libelle']);
    $email = mysqli_real_escape_string($con, $_POST['prix']);
    $phone = mysqli_real_escape_string($con, $_POST['qstock']);
    $course = mysqli_real_escape_string($con, $_POST['description']);

    $query = "INSERT INTO cahiers (npro,libelle,prix,qstock,description) VALUES ('$student_id','$name','$email','$phone','$course')";

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