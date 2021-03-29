<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Prodi</th>
			<th>Keterangan</th>
		</tr>
        <?php 
		$no = 1;
		foreach($mahasiswa1 as $row) {
            $pdi = $row['prodi1'];
            $ket = $row['keterangan'];
        
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $pdi; ?></td>
			<td><?php echo $ket; ?></td>
		</tr>
        <?php } ?>
	</table>
</body>
</html>