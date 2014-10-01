 <?php
	$conn_string = "host=ec2-54-197-241-79.compute-1.amazonaws.com port=5432 dbname=d2br0epq9lipet user=izyrzypyhztonp password=W0iB4Hq87N5WFaLrWPN1aQWcdt";
$dbconn4 = pg_connect($conn_string);
	$result = pg_query($conn, "SELECT * FROM parents");
if (!$result) {
  echo "An error occurred.\n";  
}
else {
	echo "gagan \n ";
}
	 
	   
	   echo "Hello";
	
	?>