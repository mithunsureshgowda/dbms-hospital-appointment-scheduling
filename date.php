<?php
session_start();
$con = mysqli_connect("localhost","root","","responses");

if(isset($_POST['save_datetime']))
{
    $name = $_POST['name'];
    $date = $_POST['date'];

    $query = "INSERT INTO appointments (name,date) VALUES ('$name','$date')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo "<script> alert('Appointment successfull') </script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url = welcome.php" />
        <?php
        die();
    }
    else{
        echo "<script> alert('Failed') </script>";
    }
}
?>