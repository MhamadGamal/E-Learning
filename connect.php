
<?php
$mysqli = new mysqli("localhost", "root", "", "elearning");
$result = $mysqli->query("SELECT `name`, `age`, `bio`, `email`, `gender`, `address`, `photo`, `doctor_id`, `userName`, `password`, `university_id` FROM `doctors`");
$res = $mysqli->query("SELECT * FROM `videos`");
// echo htmlentities($row['_message']);
		while ($row= $result->fetch_assoc()) {?>
			<tr>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['age'];?></td>
			<td><?php echo $row['bio'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['gender'];?></td>
		<td> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row["photo"]).'" width="150" height="200">' ?> </td>
			<td><?php echo $row['address'];?></td>
			<td><?php echo $row['doctor_id'];?></td>
			<td><?php echo $row['userName'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><?php echo $row['university_id'];?></td>
			<?php $row=$res->fetch_assoc();?>
			<td> <?php  echo'<iframe src="https://youtube.com/embed/$row['url']"></iframe>'; echo ?></td>
			</tr><br/>

	<?php	
	}
?>
<?php
$mysql= new mysqli("localhost","root","","elearning");
$result= $mysql->query("SELECT * FROM `videos`");
<?php while($row = $result->fetch_assoc()){?>
<?php echo $row['url']?>
<?php echo $row['duration']?>
<?php echo $row['title']?><?php echo $row['views']?><?php }?>
?>