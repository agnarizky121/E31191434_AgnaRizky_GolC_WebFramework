<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Angkatan</th>
		</tr>
        <?php 
		$no = 1;
		foreach($mahasiswa2 as $row) {
            $akt = $row['angkatan'];
        
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $akt; ?></td>
		</tr>
        <?php } ?>
	</table>
</body>
</html>