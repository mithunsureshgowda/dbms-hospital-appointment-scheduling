<?php
    $servername = "localhost";
    $username   =  "root";
    $password   =   "";
    $dbname     = "responses";

    
    $conn = mysqli_connect($servername,$username,$password,$dbname); 

$fname    = $_POST['fname'];
$lname    = $_POST['lname'];
$password = $_POST['password'];
$address  = $_POST['address'];
$gender   = $_POST['gender'];
$phone    = $_POST['phone'];
$age      = $_POST['age'];


$query = "insert into registration values('$fname','$lname','$password','$address','$gender','$phone','$age')";

$data = mysqli_query($conn,$query);
if($data){
    echo "<script> alert('Registration successfull') </script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = login.php" />
    <?php
    die();
}
else{
    echo "<script> alert('Failed') </script>";
}
?>