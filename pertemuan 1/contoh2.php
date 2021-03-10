<?php 
	//$mhs = ['a','b','c'];

	$mhs = [
		'nama' => 'alfaria',
		'nim' => '182410101001',
		'usia' => '20',
	]
	$mhs = [
		[
		'nama' => 'alfaria2',
		'nim' => '182410101002',
		'usia' => '21',
		]

		['nama' => 'alfaria3',
		'nim' => '182410101003',
		'usia' => '22',
		]
	]
	
	//$makanan = ['burger','donat'];

	//switch ($makanan [0]) {
	//	case 'burger':
	//		echo "di index 0 burger";
	//		break;
	//	default:
	//		echo "tes";
	//		break;
	//}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		belajar array
 	</title>
 </head>
 <body>
 	<h1>data mahasiswa</h1>
 	<table>
 		<thead>
 		<tr>
 			<td>nama :</td>
 			<td>nim :</td>
 			<td>usia : </td>
 		</tr>
 		</thead>
 		<tbody>
 		<!--	<tr>
 				<td><? = $mhs[0]; ?> </td>
 				<td><? = $mhs[1]; ?></td>
 				<td><? = $mhs[2]; ?></td>
 			</tr>
 		-->
 			<?php foreach ($students as $student): ?>
 				<?php 
 					// switch ($student) {
 					//	case $student ['name']=== 'ria':
 					//		echo $student ['name'];
 					//		break;
 					//	case $student ['name']=== 'ana':
 					//		echo "ana";
 					//		break;
 					//	default:
 					//		# code...
 					//		break;
 					// }
 				 ?>
 				
 				<tr>
 					<td><?php echo $student ['nama'] ?></td>
 					<td><?php echo  $student ['nim']?></td>
 					<td><?php echo  $student ['usia']?></td>
 				</tr>
 			<?php endforeach ?>
 		</tbody>
 	</table>
 </body>
 </html>