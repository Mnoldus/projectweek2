<?php
session_start();
include('db.php');

if(isset($_POST['save_select']))
{
    $name = $_POST['name'];
    $unique_id = $_POST['unique_id'];
    $club = $_POST['club'];

    $query = "INSERT INTO teams (naam, unique_id, club) VALUES ('$name','$unique_id','$club')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: profile.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: profile.php");
    }
}

if(isset($_POST['save_select']))
{
    $name = $_POST['name'];
    $unique_id = $_POST['unique_id'];
    $club = $_POST['club'];
    $assist = $_POST['assist'];
    $goals = $_POST['goals'];

    $query = "INSERT INTO goals (unique_id, naam, goals, assist, team) VALUES ('$unique_id','$name','$goals','$assist','$club')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: profile.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: profile.php");
    }
}

?>