<html>
	<body>




    <?php 
		$message = $onemessage->fetch_assoc()
	?>

        <h1>Edit User Message</h1>
		<form method="POST" action="./updated_message">
		<div style="background-color grey"> <h3>Message ID :  <input value=<?php echo $message["id"]; ?> name="id" readonly> </h3></div>
        <h3>Fullname :   <?php echo $message["fullname"]; ?> </h3>
		<h3>Edited Message : <input type="text" name="text">
		
		<h3><input type="submit" value="update" name="btn">
		</form>
		<h1></h1>
		<h1></h1>
		<br>
		<br>
		





	</body>
</html>