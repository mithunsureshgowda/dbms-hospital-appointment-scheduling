<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		*{
			text-decoration: none;
		}
		.navbar{
			background: skyblue; font-family: calibri; padding-right: 15px;padding-left: 15px;
		}
		.navdiv{
			display: flex; align-items: center; justify-content: space-between;
		}
		.logo a{
			font-size: 35px; font-weight: 600; color: white;
		}
		li{
			list-style: none; display: inline-block;
		}
		li a{
			color: white; font-size: 18px; font-weight: bold; margin-right: 25px;
		}
		button{
			background-color: black; margin-left: 10px; border-radius: 10px; padding: 10px; width: 90px;
		}
		button a{
			color: white; font-weight: bold; font-size: 15px;
		}
        .nav
        {
          text-align:center;  
            margin-right:20%;
        }
        body{
            background-image: url("background.png");
        }
        
.button-73 {
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

.button-73:hover {
  background-color: ;
  box-shadow: #FF6314 0 -6px 8px inset;
  transform: scale(1.125);
}

.button-73:active {
  transform: scale(1.025);
}

@media (min-width: 768px) {
  .button-73 {
    font-size: 10px;
    padding: 20px 20px;
    
  }
}
	</style>
</head>
<body>
	<nav class="navbar">
		<div class="navdiv">
			<h1>CMRIT HOSPITAL</h1>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Account</a></li>
				<li><a href="appointment.php">Appointment</a></li>
				<button><a href="login.php">Logout</a></button>
				
			</ul>
		</div>
	</nav>
    <div>
        <br>
        <a href="department.php">
<button class="button-73" >Book an Appointment</button>
</a><br><br>
<button class="button-73">Health Packages</button><br><br>
<button class="button-73" >Reports</button><br><br>
<button class="button-73">Home care</button>

</div>
</body>
</html>