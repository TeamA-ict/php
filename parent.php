 <?php
	require 'controller.php';
	
	 $query  = "select * from parents";
	 
	  $result = pg_query($query) or die("Query failed:".pg_last_error());
	  
	   pg_free_result($result);
	   
	   echo "Hello";
	
	?>