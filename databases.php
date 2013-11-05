<?php
    //create a database connection
	$db = mysql_connect("localhost","yykf","Fishguys1");
	//CHANGE LOGIN DATA BEFORE SENDING TO GITHUB!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	if (!$db) {
	    die("Database connection failed: " . mysql_error());
	}

    //select  a database to use
    $db_select = mysql_select_db("widget_corp",$db);
    if (!$db_select) {
	    die("Database connection failed: " . mysql_error()); 	
	}
?>  
<html>
    <head>
	    <title>Database</title>
	</head>
    <body>
    <h2>HI</h2>
	<?php
	//Perform database query
	$result = mysql_query("SELECT * FROM subjects", $db);
	 if (!$result) {
	    die("Database connection failed: " . mysql_error()); 
	}
	
	//use returned data
	while ($row =mysql_fetch_array($result)) {
	    echo $row[1]. " ".$row[2]."<br />";
	}	
	?>
    </body>
</html>	