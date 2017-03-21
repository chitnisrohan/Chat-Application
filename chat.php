<?php
	include 'db.php';
	$query = "SELECT * FROM chat ORDER BY id DESC";
	$run = $conn->query($query);
	while($record = $run->fetch_array()) :
?>
<div id = "chat_data">
	<span class="name"> <?php echo $record['name']; ?> </span> : 
	<span class = "message"> <?php echo $record['message']; ?> </span>
	<span class="time"> <?php echo formatDate($record['time']); ?> </span>
</div>
<?php endwhile; ?>