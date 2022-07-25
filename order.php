
<!DOCTYPE html>
<html>
<head>
	<title>order</title>
	<style >
		body{background: black;
	
		   background-image: url("https://thumbs.dreamstime.com/b/stationery-background-school-tools-seamless-pattern-art-education-wallpaper-line-icons-pencil-pen-paintbrush-stationery-169363851.jpg");
	
color: white;
 font-family: 'Langar', cursive;
h1{ font-size: 60px;}
h2{font-size: 40px;}
	</style>

</head>
<body>
<center>	<h1>Registration form :</h1>
	
		<center><img src="https://cdn.dribbble.com/users/751212/screenshots/2510592/registerflow_v1r1.gif" width="400" height="350">

<center><h2 >Apply Online</h2></center>
<form action="" method="POST">
<center>Name <input type="text" name="name"><br></center>
<center>Gender  <input type="text" name="gender"><br></center>
<center>Age  <input type="text" name="age"><br></center>
<center>Course you want to study  <input type="text" name="course"><br></center>
<center>last degree <input type="text" name="degree"><br></center>
<center>phone  <input type="text" name="phone"><br>

</center>
<center>

Country:<input type="text" name="country">
Religion:<input type="text" name="religion">

<center><p><b>click below to submit your order.</b></p></center>
<center><input type="submit" name="register"> </center>

<h3>Click below to go back to front page:</h3>
		<a href="front page.html"><img src="https://webstockreview.net/images/button-clipart-icon-18.png" width="80" height="80"></a>
		<h3>Click below to reset:</h3>
		<a href="order.php"><img src="https://icon-library.com/images/reset-button-icon/reset-button-icon-16.jpg" width="80" height="80"></a>

</form>
</body>
</html>
<?php 
include 'connection1.php';

if (isset($_POST['register']))
 { 
 	$name = $_POST['name'];
 	$gender = $_POST['gender'];
 	$age=$_POST['age'];
 	$course=$_POST['course'];
	$degree=$_POST['degree'];
	$phone=$_POST['phone'];
	$country=$_POST['country']; 
	$religion=$_POST['religion']; 

	$uni="insert into morder (name,gender,age,course,degree,phone,country,religion)values('$name','$gender','$age','	$course','$degree','$phone','$country', '$religion')";
$reg=mysqli_query($con,$uni);
	 if ($reg) {
		?>
		<script >
			alert('registration successful');
		</script>
		<?php
	}else{
		?>
		<script >
			alert('registration unsuccessful')
		</script>
		<?php
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
<h2>click below to watch your registration status :</h2>
<a href="status1.php"><img src="https://secure.ovationcredit.com/Content/Images/plans/icon-sign-up.png" width="120" height="120"></a>


</body>
</html>