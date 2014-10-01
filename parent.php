 <?php
	$conn_string = "host=ec2-54-197-241-79.compute-1.amazonaws.com port=5432 dbname=d2br0epq9lipet user=izyrzypyhztonp password=W0iB4Hq87N5WFaLrWPN1aQWcdt";
$dbconn4 = pg_connect($conn_string);
	$query = " select * from parents ";
	$result = pg_query($query) or die("Query failed:".pg_last_error());
	echo "<table border='1' align='center'>
	<tr>
	<td>  id </td>
	<td> links </td>
	</tr>
	</table>\n";
	 
	   
	   echo "Hello";
	
	?>