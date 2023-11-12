
<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: Arial, sans-serif;
    background-image: url("img/w3.webp");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    color: bold;
}

h1 {
    text-align: center;
    color: yellowgreen;
}

.container {
    max-width: 1500px;
    margin: 0 auto;
    padding: 40px;
    background-color: none;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
}

a {
    font-family: Arial;
    color: blue;
    font-size: 17px;
    font-weight: bold;
    text-decoration: none;
}

a.myButton {
    display: inline-block;
    margin-right: 50px;
}

p {
    color: orange;
    font-weight: bold;
    text-align: center;
}

table.products {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table.products th {
    background-color: #6495ed;
    font-weight: bolder;
}

table.products th,
table.products td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    color: #000;
}

table.products td input,
table.products td select {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

table.products td textarea {
    width: 100%;
    height: 40px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

table.products tr:nth-child(even) {
    background-color: thistle;
}

table.products tr:hover {
    background-color: lavender;
}
footer {
    background-color: #fff;
    color: black;
    text-align: center;
	margin-top: 0px;
    padding: 10px;
}
</style>
</head>
<body>
<link rel=stylesheet type='text/css' href='mycss.css'></link>
<div class="container">
    <h1>JAMROCK CINEMA</h1>
    <div>
<?php
	$userlevel = 'guest';
	//Get userlevel received
	if(isset($_GET['uxl'])){
		$userlevel=$_GET['uxl'];
	}
	echo '<a href="index.php?uxl='.$userlevel.'" class="myButton">Home</a>';
?>
</div>
<br>

<p style="color:lightgreen;font-weight:bold">
MOVIES
</p>

<?php

$user = 'root';
$password = ''; //To be completed if you have set a password to root
$database = 'byardtst'; //To be completed to connect to a database. The database must exist.
$port = 3306; //Default must be NULL to use default port
$mysqli = new mysqli('localhost', $user, $password, $database, $port);



$message = "";
if(isset($_POST['EditButton'])){ //check if form was submitted
    $recid = $_POST['rid']; //get input text
    $rectitl = $_POST['rtitl']; //get input text
    $recdesc = $_POST['rdesc']; //get input text
    $recrating = $_POST['rrating'];
    $reccast = $_POST['rcast'];  //get input text
    $recimgurl = $_POST['rimgurl']; 
    $rectrailerlink = $_POST['rtrailerlink']; 
    $recstart = date('Y-m-d',strtotime($_POST['start_date'])); //Set date value to Y-m-d format
    $recend = date('Y-m-d',strtotime($_POST['end_date'])); //Set date value to Y-m-d format
    //If no new rating selected use previous rating
    if ($recrating == '') {
        $recrating = $_POST['oldrating'];
    }
    $SQL = "SELECT * FROM movie where id = '$recid'";
    $result1 = mysqli_query($mysqli, $SQL);
    if ($result1->num_rows == 0) {
        $message =  "Record not found for update";
    }
    else {
        $SQL = "UPDATE movie SET title='".$rectitl."', description='".$recdesc."', rating='".$recrating."', start_date='".$recstart."', end_date='".$recend."', cast='".$reccast."', image_url='".$recimgurl."', trailer_link='". $rectrailerlink."' WHERE id = '".$recid."'";
        $result2 = mysqli_query($mysqli, $SQL);
        $message =  "Record ".$recid." updated sucessfully";
    }
  }
if (isset($_POST['SubmitButton'])) {
    // ...
} elseif (isset($_POST['Button'])) {
    // Handle record change/update
    // ...
} elseif (isset($_POST['DeleteButton'])) {
        $recid = $_POST['rid'];
        $SQL = "DELETE from movie WHERE id = '".$recid."'";
        $result2 = mysqli_query($mysqli, $SQL);
    // Handle record deletion
    // ...
} elseif (isset($_POST['CreateButton'])) {
    // Handle new record creation
    $arectitl = $_POST['adtitl'];
    $arecdesc = $_POST['addesc'];
    $areccast = $_POST['adcast']; // Added for Cast
    $arecrating = $_POST['adrating'];
    $arecimg_url = $_POST['adimg_url']; // Added for Image_URL
    $arectrailer_link = $_POST['adtrailer_link']; // Added for Trailer_Link

    $arecstart = date('Y-m-d', strtotime($_POST['adstart_date']));
    $arecend = date('Y-m-d', strtotime($_POST['adend_date']));

    // Insert the new movie record into the database
    $SQL = "INSERT INTO movie (title, description, cast, rating, start_date, end_date,  image_url, trailer_link) 
            VALUES ('$arectitl', '$arecdesc', '$areccast', '$arecrating', '$arecstart', '$arecend',  '$arecimg_url', '$arectrailer_link')";
    $result2 = mysqli_query($mysqli, $SQL);
    $message = "Record added successfully";
}

$SQL = "SELECT * FROM movie ORDER BY title";
$result = mysqli_query($mysqli, $SQL);

?>
<div>
    <table class="products">
        <tr>
            <th>New Movie</th>
            <th>Title</th>
            <th>Description</th>
            <th>Cast</th> <!-- Added for Cast -->
            <th>Rating</th>
            <th>Image_URL</th> <!-- Added for Image_URL -->
            <th>Trailer_Link</th> <!-- Added for Trailer_Link -->
            <th>Date Period</th>
            <th>Submit</th>
        </tr>
        <?php
        print "<tr>";
        print '<form action="" method="post">';
        print "<td><input type='text' id='adid' name='adid' size='3' maxlength='3' readonly style='background-color:#6699cc'></td>";
        print "<td><input type='text' id='adtitl' name='adtitl' size='40' maxlength='40' required></td>";
        print "<td><textarea id='addesc' name='addesc' rows='2' cols='50'></textarea></td>";
        print "<td><input type='text' id='adcast' name='adcast' size='40' maxlength='255'></td>"; 
        print "<td>New Rating <select id='adrating' name='adrating'><option value=''></option><option value='PG-13'>PG-13</option><option value='PG-16'>PG-16</option></select></td>";
        print "<td><input type='text' id='adimg_url' name='adimg_url' size='40' maxlength='255'></td>";
        print "<td><input type='text' id='adtrailer_link' name='adtrailer_link' size='40' maxlength='255'></td>";
        print '<td>Start Date <input type="date" id="adstart_date" name="adstart_date" required><br>';
        print 'End Date &nbsp <input type="date" id="adend_date" name="adend_date" required></td>';
        print '<td><input type="submit" value="Create" name="CreateButton"></td>';
        print '</form>';
        print "</tr>";
        ?>
    </table>
</div>
<div>
<table class="products">
<tr>
<th>Movie Num</th>
<th>Title</th>
<th>Description</th>
<th>Cast</th> <!-- Added for Cast -->
<th>Rating</th>
<th>Image URL</th> <!-- Added for Image_URL -->
<th>Trailer Link</th> <!-- Added for Trailer_Link -->
<th>Date Period</th>
<th>Submit</th>
<th>Delete</th>
</tr>
		<?php
          while ( $db_field = mysqli_fetch_assoc($result) ) {
			//if id blank or null  
			if (is_null($db_field['id']) || $db_field['id']=='') {  
			   $rid='N/A';
			}
			else {
			   $rid=$db_field['id'];	
			}
			$rtitl="'".$db_field['title']."'";
			//No need to put values for textareas in quotes
			$rdesc=$db_field['description'];
            //Added for Cast, Image_URL, and Trailer_Link
            $rcast =$db_field['cast'];
            $rimgurl =$db_field['image_url'];
            $rtrailerlink =$db_field['trailer_link'];
            if (is_null($db_field['cast'])) {  
                $rcast='';
             }
             if (is_null($db_field['image_url'])) {  
                $rimgurl='';
             }
             if (is_null($db_field['trailer_link'])) {  
                $rtrailerlink='';
             }


			//if rating blank or null
			if (is_null($db_field['rating']) || $db_field['rating']=='') {  
			   $rrating='Not_Rated';
			}
			else {
			   $rrating="'".$db_field['rating']."'";	

            }
              
            
  
            
            print "<tr>";
			  print '<form action="" method="post">';
              print "<td><input type='text' id='rid' name='rid' value=".$rid." size='3' maxlength='3' readonly style='background-color:#6699cc'></td>";
              print "<td><input type='text' id='rtitl' name='rtitl' value=".$rtitl. "size='40' maxlength='40' required></td>";
              print "<td><textarea id='rdesc' name='rdesc' rows='2' cols='50'>".$rdesc."</textarea></td>";
              print "<td><input type='text' id='rcast' name='rcast' value=".$rcast ." size='40' maxlength='255'></td>"; 
              print "<td><input type='text' id='oldrating' name='oldrating' value=".$rrating." size='15' maxlength='15' readonly style='background-color:#6699cc'><br>";
			  print "New Rating <select id='rrating' name='rrating'><option value=''></option><option value='PG-13'>PG-13</option><option value='PG-16'>PG-16</option></select></td>";
              print "<td><input type='text' id='rimgurl' name='rimgurl' value=".$rimgurl ."  size='40' maxlength='255'></td>"; 
              print "<td><input type='text' id='rtrailerlink' name='rtrailerlink' value=".$rtrailerlink ."  size='40' maxlength='255'></td>"; 
              print '<td>Start Date <input type="date" id="start_date" name="start_date" value='.$db_field['start_date'].' required><br>';
			  print 'End Date &nbsp <input type="date" id="end_date" name="end_date" value='.$db_field['end_date'].' required></td>';
              print '<td><input type="submit" value="Edit" name="EditButton"></td>';
			  print '<td><input type="submit" value="Delete" name="DeleteButton"></td>';
			  print '</form>';
            print "</tr>";
			
		  }	
		?>	
</table>
</div>
<?php echo $message; ?>
<br><br>
<footer>
<div>&copy; Jamrock Cinema</div>
</footer>
<?php
$mysqli->close();
?>
</body>
</html>