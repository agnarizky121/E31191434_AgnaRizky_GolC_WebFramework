<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
            <th>Prodi</th>
		</tr>
        <?php 
		$no = 1;
		foreach($mahasiswa as $row) {
            $name = $row['nama'];
            $pdi = $row['prodi'];
		?>
		<tr>
			<td><?php echo $no++; ?></td>
            <td><?php echo $name; ?></td>
			<td><?php echo $pdi; ?></td>
		</tr>
        <?php } ?>
	</table>
</body>
</html>