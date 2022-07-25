<?php 
$username = 'root';
$password = '';
$server = 'localhost';
$db = 'admission';


$con=mysqli_connect($server,$username,$password,$db);
 if ($con) {
 	//echo "connection successful";
 	?>
 	<script >
 		alert('connection successful');
 	</script>
 	<?php
 }
 else  
 	{echo "connection failed";}

 ?>