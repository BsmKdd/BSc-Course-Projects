<?php

    include("../connection.php");
    $deletedValue = json_decode($_POST["deletePackage"], true);

    if(($deletedValue['key']) != 'KeyForDatabase')
    {
        exit("Not Authorized");
    }
    
    $id = $deletedValue['id'];

    $qryDelete="DELETE from workouts where workoutID = $id";
    mysqli_query($con,$qryDelete) or die (mysqli_error($con));
?>