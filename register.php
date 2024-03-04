
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link href='C:\Users\mithu\OneDrive\Desktop\dbms project\style.css' rel='style'>
    <title>Login Page</title>
</head>
<body>
    <form action="connection.php" method="POST">
    <div class="box">
        <div class="container">
           <div class="top-header">
                <header>Registration Form</header>
            </div>

            <div class="input-field">
                <input type="text" class="input" placeholder="firstname" name="fname" id="fname" required>
                <i class="bx bx-user"></i>
            </div>
            <br>
            
            <div class="input-field">
                <input type="text" class="input" placeholder="lastname" name="lname" id="lname" required>
                <i class="bx bx-lock-alt"></i>
            </div><br> 

            <div class="input-field">
                <input type="password" class="input" placeholder="Password" name="password" id="password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <br>
    
            <div class="input-field">
                <input type="text" class="input" placeholder="address" name="address" id="address" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <br>
           
            
            <div class="input-field">
                <input type="text" class="input" placeholder="gender" name="gender" id="gender" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <br><div class="input-field">
                <input type="number" class="input" placeholder="Phone" name="phone" id="phone" required>
                <i class="bx bx-lock-alt"></i>
            </div><br>
            <div class="input-field">
                <input type="number" class="input" placeholder="Age" name="age" id="age" required>
                <i class="bx bx-lock-alt"></i>
            </div><br>
            
            <div class="input-field">
                <a href ="login.php">
               <input type="submit" class="submit" value="register"  name="register">
            </a>
            </div>
        </div>
    </div>
</form>
</body>
</html>