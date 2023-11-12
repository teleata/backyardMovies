<html>
<head>
<style>
body  {
   background-image: url("img/pexels.jpg");
   background-position: center;
   background-repeat: no-repeat;
   background-size: cover;
}
</style>
</head>

<title></title>
<link rel=stylesheet type='text/css' href='mycss.css'></link>
<body>


<img src="visuals.jpg" style="position: absolute; top: 0; left: 10;z-index:-1;">
<h1 class="text-white text-center">JAMROCK CINEMA</h1>
<br><br>
</p>
<?php
$message = "Leave blank to sign in as guest";
$action = ""; 
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $authuser = strip_tags(trim($_POST['username'])); //get input text  
  $authpass = strip_tags(trim($_POST['password'])); //get input text
  
  $reslevel ='';
  if ($authuser == '') {
	  $reslevel = 'guest';
  } 	  
  
  $user = 'root';
  $password = ''; //To be completed if you have set a password to root
  $database = 'byardtst'; //To be completed to connect to a database. The database must exist.
  $port = 3306; //Default must be NULL to use default port
  $mysqli = new mysqli('localhost', $user, $password, $database, $port);
 
  //Initial method of sql query
  $SQL = "SELECT username, password from user where username = '$authuser'";
  $result = mysqli_query($mysqli, $SQL);
  
  //userlevel passed to main php to determine elements hidden/displayed
  
  if ($reslevel == 'guest') {
	  Header("Location: index.php?uxl=".$reslevel);
  }
  else {
 
  //Using parameterized query to prevent SQL Injection
  $stmt = mysqli_prepare($mysqli, "SELECT username,password,userlevel from user where username = ?");
  mysqli_stmt_bind_param($stmt, "s", $authuser);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt, $resusr,$respas,$reslevel);
  mysqli_stmt_fetch($stmt);
  
   if ($resusr == $authuser) {
	  if ($respas == $authpass) {
		  mysqli_stmt_close($stmt);
		  $mysqli->close();
		  header("location: index.php?uxl=".$reslevel);
      }
      else {
		  $message =  "Invalid Password";
		  mysqli_stmt_close($stmt);
		  $mysqli->close();
	  }
   }	  
   else {
		  $message =  "Invalid User";
		  mysqli_stmt_close($stmt);
		  $mysqli->close();
   }
   
  }
  
}    
?>
<style>
        body {
            font-family: Arial, sans-serif;
            
        }
        .container {
            max-width: 400px;
            margin: 10px;
            padding: 0px;
            background-color: lightcyan;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            opacity: 100%;
        }
        label {
            display: block;
            margin-bottom: 5px;
            margin-left: 10px;
            font-style: normal;
            color: white;
            font-size: larger;
            font-weight: bolder;
        }
        span{
            display: block;
            margin-left: 10px;
            font-style: normal;
            font-size: larger;
            margin-bottom: 0px;
            color: #fff;
        }
        select{
            display: block;
            margin-left: 10px;
        }
        input {
            width: 150%;
            padding: 8px;
            margin-bottom: 10px;
            margin-left: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
           
            
        }
        
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: larger;
        }
        
    </style>
<form name=mainwindow action="" method="post">
<div style="margin-left:800px;padding:20px;width:400px;background-color:green; border:1px black ridge">
<div class="wrapper">
<div class="heading"></div>
<div class="container">
        <h1>Login</h1>
 	</div>
	<table cellspacing=5>
	<tr><td>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label>Username:</label>
    <input type="text" id="username" name="username" size="30" placeholder="Enter Username..">
	</td></tr><tr><td>
    <span>Password:</span><br>
    <input type="password" id="password" name="password" size="30" placeholder="Enter Password..">
    </td></tr><tr><td>
    <label for="userlevel">User Level:</label> 
            <select id="userlevel" name="userlevel" required>
                <option value="supervisor">Supervisor</option>
                <option value="admin">Admin</option>
            </select>
    <div><br>
    <input type="submit" value="Sign In" name="SubmitButton">
	</td></tr><tr><td>
    </div>
   	<?php  $message; ?>
	</td></tr>
	</table>
</div>
</form>
<br><br>
<div>&copy; Jamrock Cinema</div>



</body>
</html>