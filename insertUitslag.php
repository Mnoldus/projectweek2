<?php
session_start();
include('db.php');

if(isset($_POST['save_select']))
{
    $thuisteam = $_POST['thuisteam'];
    $thuisgoals = $_POST['thuisgoals'];
    $uitteam = $_POST['uitteam'];
    $uitgoals = $_POST['uitgoals'];

    $query = "INSERT INTO uitslag (thuisteam,thuisgoals,uitteam,uitgoals) VALUES ('$thuisteam','$thuisgoals','$uitteam','$uitgoals')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: uitslagInvoeren.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: uitslagInvoeren.php");
    }
}
?>