<html>
	
	<body>
	
		<form method="POST" action="./addNews" enctype="multipart/form-data">
		<h1>Headline : <input type="text" name="headline">
		<h1>Excerpt : <input type="text" name="excerpt">
		<h1>News Content : <input type="textarea" name="content">
		<h1>News Picture : <input type="file" name="fileToUpload" id="fileToUpload">
		<h1>News Category : <select name="news_cat">
						<?php 
						
						while($row = $name_cat->fetch_assoc()){
							
							echo "<option value=" . $row['id'] .">" . $row['title'] . "</option>";
						}
						?>
									</select>

		<h1>Date : <input type="date" name="date">
		<h1><input type="submit" value="add news" name="btn">
		</form>
		<h1></h1>
		<h1></h1>
		<br>
		<br>
		<a href="./back">back to Dashboard</a>
	</body>
</html>


 