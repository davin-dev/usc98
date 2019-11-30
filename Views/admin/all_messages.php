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
		<th>fullname</th>
		<th>text</th>
		<th>email</th>
	</tr>
	
	<?php 
		while($message = $allmessages->fetch_assoc()){
	?>
	<tr>
		<td><?php echo $message["id"]; ?></td>
		<td><?php echo $message["fullname"]; ?></td>
		<td><?php echo $message["text"]; ?></td>
		<td><?php echo $message["email"]; ?></td>
		<td><a class="remove" href="./delete_messages&id=<?php echo $message["id"]; ?>">X</a></td>
		<td><a class="text" href="./show1_message&id=<?php echo $message["id"]; ?>">Show Message</a></td>
	</tr>
	<?php
		} // end of while
	?>
</table>

<br>
		<br>
		<a href="./back">back to Dashboard</a>