<html>
	
	<body>
	<h1>Category Management System</h1><br>
		<form method="POST" action="/admin/cat_add">
		<h3>Category name<br> <input type="text" name="category">
        <input type="submit" width="48" height="48" value="add Category" name="submit">
		</form>
		<br><br><br>
	<h3>Category List</h3>
		<table>
		<tr>
			<th>id</th>
			<th>category title</th>
			
		</tr>
		
		<?php 
			while($cat = $allcat->fetch_assoc()){		// start of while
		?>
		<tr>
			<td><?php echo $cat["id"]; ?></td>
			<td><?php echo $cat["title"]; ?></td>
			<td><a class="remove" href="./cat_delete&id=<?php echo $cat["id"]; ?>">X</a></td>
		</tr>
		<?php
			} // end of while
		?>
		</table>

    </body>
<html>
