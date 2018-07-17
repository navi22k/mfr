<!DOCTYPE html>
<html>
<head>
	<title>PHP Form</title>
	<style >
		.colors{
			color: #FF0000;
		}
	</style>
</head>
<body>
<h2>This is a Test Form</h2><br>

<span class="colors">*is required field</span><br><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">

	First Name: <input type="text" name="fname" value="" placeholder="First Name"><br><br>
	Last Name: <input type="text" name="lname" value="" placeholder="Last Name"><br><br>
	Email Address: <input type="text" name="email" value="" placeholder="Your Email"><br><br>
	<input type="submit" name="submit" value="submit">

</form>

<?php 

echo $fname; 
echo $lname; 

?>




</body>
</html>