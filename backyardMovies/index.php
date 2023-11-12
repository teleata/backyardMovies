<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Movie Listing Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>WELLCOME TO JAMROCK !</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="loginpage.php">Sign In</a></li>
            <li><a href="customer.php">Sign Up</a></li>
        </ul>
    </nav>
    <section class="movie-list">
<style>
body  {
	font-family: "Roboto", sans-serif;
    background-image: url("img/w3.webp");
	background-color: medium;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
header {
    background-color: #333;
    background-image: url("img/visuals.jpg");
    color: white;
    text-align: center;
    padding: 10px 0;
    font-size: larger;
    
}

/* Style the navigation menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
	margin-left: 20px;
}

nav a {
    text-decoration: none;
    color: white;
    font-weight: bold;
	font-size: x-large;
    padding-bottom: 40px;
}
.featured-content {
  height: 60vh;
  padding: 30px;
  margin-bottom: 20px;
  

}

h2{
    display: block;
    color: #fff;
    margin: 50px auto;
    padding: 20px 20px;
}
.get-started-button {
    display: block;
    width: 20%;
    margin: 50px auto;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    background-color: blue;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
}

table{
    width: 100px;
    margin: 0px auto;
    background-color: #fff;
    border: 1px solid #ddd;
    text-align: left;
    padding: 40px;
}
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px;;
    background-image: url("img/photo.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
}
table-products{
	background-color: pink;
	

}
footer {
    background-color: #ddd;
    color: #fff;
    text-align: center;
	margin-top: 400px;
    padding: 10px;
}
</style>
</head>

<title></title>
<link rel=stylesheet type='text/css' href='mycss.css'></link>
<div class="container">
<h1>FEATURED MOVIES </h1>
<body>
<form name=mainwindow>
<div>
<?php
	$userlevel = 'guest';
	//Get userlevel received
	if(isset($_GET['uxl'])){
		$userlevel=$_GET['uxl'];
	}
    echo '<div class="movie-card">';
    echo '<a href="loginpage.php" style="font-family:Arial; color:blue; font-size:17px; font-weight:bold; position: absolute; right: 200;"></a>';

    //Conditionally display elements based on user level
	if ($userlevel == 'guest') {
		echo '<a href="cinematimes.php?uxl='.$userlevel.'" style="font-family:Arial; color:blue; font-size:17px; font-weight:bold; position: absolute; right: 800;"></a>';
	}

    echo '<a href="booking.php?id=1"style="font-family:Arial; color:blue; font-size:17px; font-weight:bold; position: absolute; right: 400;"></a><br><br><br><br><br>';

	//Conditionally display elements based on user level
	if ($userlevel == 'admin') {
		echo '<a href="users.php?uxl='.$userlevel.'" class="myButton">Maintain Users</a> &nbsp;&nbsp;';
	}
	if ($userlevel == 'admin' || $userlevel == 'supervisor') {
		echo '<a href="movies.php?uxl='.$userlevel.'" class="myButton">Maintain Movies</a> &nbsp;&nbsp;';
		echo '<a href="cinematimes.php?uxl='.$userlevel.'" class="myButton">Maintain Schedules</a>';
        echo '<a href="cinematimes.php?movie_id=1">View Details</a>'; 
	}
?>
</div>
<?php

$user = 'root';
$password = ''; //To be completed if you have set a password to root
$database = 'byardtst'; //To be completed to connect to a database. The database must exist.
$port = 3306; //Default must be NULL to use default port
$mysqli = new mysqli('localhost', $user, $password, $database, $port);

//select movies where current date in the range of start date and end date 
$SQL = "SELECT * FROM movie where CURDATE() >= start_date and CURDATE() <= end_date order by title";
$result = mysqli_query($mysqli, $SQL);

?>

<div>
<table class="products">
<tr>
<th>Title</th>
<th>Rating</th>
<th>Start_Date</th>
<th>End_Date</th>
</tr>
		<?php
          while ( $db_field = mysqli_fetch_assoc($result) ) {
			$rtitl=$db_field['title'];
			$rrating=$db_field['rating'];
            $rstart_date=$db_field ['start_date'];
            $rend_date=$db_field ['end_date'];	
            print "<tr>";
            print "<td>".$rtitl."</td>";
            print "<td>".$rrating."</td>";
            print "<td>".$rstart_date."</td>";
            print "<td>".$rend_date."</td>";
            print "</tr>";
		  }	
           
		?>	
</table>
</div>  
</body>



</div>
</form>
<div>
<h2>Ready to watch? Click below to sign Up or register.</h2>
<a href="customer.php" class="get-started-button">Get Started</a>
</div>
<?php
$mysqli->close();
?>

</form>










<footer>
    <p>&copy; Jamrock Cinema</p>
</footer>

</body>
</html>