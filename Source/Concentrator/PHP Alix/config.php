<?php 
$dbhost = "localhost";
$dbname = "store";
$dbuser = "root";
$dbpassword = "voyage";

	//establish the connection
	$con = mysql_connect($dbhost, $dbuser, $dbpassword);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	//select database
	mysql_select_db($dbname, $con);

	//run query
	$query = mysql_query("SELECT id_mac, time FROM store.Node WHERE status_read = '-1'");
	
	$total_rows = mysql_num_rows($query);
	
	if ($total_rows!=0) {
		echo "# ", " ", $total_rows;
	}
	
	while ($row = mysql_fetch_array($query)) {
	echo " ", $row["id_mac"], " ", $row["time"];
	}
	//status_read mark as read (0)
	$query = mysql_query("UPDATE store.Node SET status_read='0' WHERE status_read='-1'");
	
	//close connection
	mysql_close($con);
?> 
