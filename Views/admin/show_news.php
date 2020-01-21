<style>
	*{
		margin: 0;
		padding: 0;
	}
	th{
		background: #555;
		color: #fff;
		padding: 10px;
		border: none;
	}
	
	tr:nth-child(odd){
		background: #ddd;
	}
	
	.remove{
		color: #f00;
	}
</style>

<table>
	<tr>
		<th>id</th>
		<th>date</th>
		<th>headline</th>
		<th>news content</th>
	</tr>
	
	<?php 
		$news = $onenews->fetch_assoc()
	?>
	<tr>
		<td><?php echo $news["id"]; ?></td>
		<td><?php echo $news["date"]; ?></td>
		<td><?php echo $news["headline"]; ?></td>
		<td><?php echo $news["content"]; ?></td>
		<td><a class="remove" href="./delete_news&id=<?php echo $news["id"]; ?>">X</a></td>
	</tr>
	
</table>

<br>
		<br>
		