<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="style.css">
    <link href='C:\Users\mithu\OneDrive\Desktop\dbms project\style.css' rel='style'>
    <title>Login Page</title>
</head>
<style>
    h2{
        margin-top: 10%;
        font-size: 40px;
        text-align: center;
        color: rgb(0, 0, 0);
    }
    .input.hover{
        opacity: 10;
    }
</style>
<body>
    <h2> HOSPITAL APPOINTMENT SCHEDULING SOFTWARE</h2>
    <div class="box">
           <div class="container">
                <div class="top-header">
                
                <header>Login</header>
            </div>
            <form method="post" >
            <div class="input-field">
                <input type="text" class="input" placeholder="Username" required name="username">
                <i class="bx bx-user"></i>
            </div>
            <br>
            <br>
            <div class="input-field">
                <input type="password" class="input" placeholder="Password" name="password">
                <i class="bx bx-lock-alt"></i>
            </div<br>
            <br>
            <div class="input-field">
                
                <input type="submit" class="submit" value="Login" name="login">

</div>
                <br>
                </form>
                <div class="input-field">
                    <a href="register.php">
                    <input class="submit" value="                                                register" name="">
                    </a>
                </div>
            
            

        </div>
    </div>
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","responses") or die("Connection failed");
if(!empty($_POST['login'])){
    $usn = $_POST['username'];
    $pass = $_POST['password'];
    $query = "select * from registration where fname='$usn' and password='$pass'";
    $res = mysqli_query($conn,$query);
    $count = mysqli_num_rows($res);
    if($count>0){
		
        header("Location: welcome.php");
        die();
    }
    else{
        echo "<script> alert('Incorrect user name or password please register to login') </script>";
    }
}
?>