<table>
	<tr>
		<th>id</th>
		<th>date</th>
		<th>headline</th>
		<th>news content</th>
	</tr>
	
	<?php 
		while($news = $allNews->fetch_assoc()){
	?>
	<tr>
		<td><?php echo $news["id"]; ?></td>
		<td><?php echo $news["date"]; ?></td>
		<td><?php echo $news["headline"]; ?></td>
		<td><?php echo $news["content"]; ?></td>
		<td><a class="remove" href="./delete_news&id=<?php echo $news["id"]; ?>">X</a></td>
		<td><a class="text" href="./getone&id=<?php echo $news["id"]; ?>">Show News</a></td>
	</tr>
	<?php
		} // end of while
	?>
</table>

<br>
		<br>
		<a href="admin/back">back to Dashboard</a>