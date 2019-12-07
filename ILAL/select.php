<div class="conatainer-fluid">
	<a href="form_input.php">form</a>
	<br>
	<table>
		<tr>
			<td>NO</td>
			<td>nama depan</td>
			<td>nama belakang</td>
			<td>email</td>
			<td>aksi</td>
		</tr>

	</table><br>

	<?php 
	require 'koneksi.php';

	$sql = "SELECT * FROM account";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			echo "<br> " . $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"]. " - email " . $row["email"]. "<br>";
		}
		}else{
			echo "0 results";
		}
	mysqli_close($conn);
	?>
	

</div>