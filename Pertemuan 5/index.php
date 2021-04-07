<?php 
$conn = mysqli_connect (hostname: "localhost", username: "root",password: "", database:"praktikumweb");
// if ($conn){
// 	echo "Connection Sukses";
// }else{
// 	echo "something wrong";
// }

$query = "SELECT*FROM mahasiswa" ;
$result = mysqli_query($conn,$query);
while ($data = mysqli_fetch_assoc($result)) {
	echo '
		<p>'. $data [nim]. ' </p>
		<p>'. $data [nama]. ' </p>
		<p>'. $data [prodi]. ' </p>
		';
}
 ?>

<!DOCTYPE html>
	<html>
	<head>
		<title>pemroweb</title>
	</head>
	<body>
		<div class="container mt-5">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Nim</th>
				<th scope="col">Nama</th>
				<th scope="col">Prodi</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($data = mysqli_fetch_assoc($result)) :?>
				<tr>
					<td><?php $data [nim] ?></td>
					<td><?php $data [nama] ?></td>
					<td><?php $data [prodi] ?></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
	</div>
	</body>
	</html>	
