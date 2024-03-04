<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
    background-image: url("backgrond.png");
    }
    
    </style>
<body>
    
</body>

<?php
include("conn.php");
error_reporting(0);
$query = "select * from appointments";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
$total = mysqli_num_rows($data);
if($total!=0)
{
    ?>
    <center>
        <h1> appointments</h1>
    <table border="5" color="white">
        
        <th>name</th>
        <th>Date and time</th>
        

<?php

    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <th>".$result["name"]."</th>
        <th>".$result["date"]."</th>
        </tr>
        ";
        
        
    }
}

?>
</table>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
th{
color:white;
padding:10px;
}
button {
  margin-right:10%;
  appearance: right;
  background-color: #FFFFFF;
  border-radius: 40em;
  border-style: none;
  box-shadow: #ADCFFF 0 -12px 6px inset;
  box-sizing: border-box;
  color: #000000;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,sans-serif;
  font-size: 1.2rem;
  font-weight: 700;
  letter-spacing: -.24px;
  margin: 30;
  outline: none;
  padding: 1rem 1.3rem;
  quotes: auto;
  text-align: center;
  text-decoration: none;
  transition: all .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}
body{
            background-image: url("background.png");
        }
    </style>
<body>

</body>
</center>
</html>