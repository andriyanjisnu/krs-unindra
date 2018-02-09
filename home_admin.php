<?php
require_once("koneksi.php");

$sql = "SELECT * FROM profil";
$result = $con->query($sql);
$con->close();
?>
<html>
<head>
 <link href="style.css" rel="stylesheet" type="text/css" />
 <title>Mahasiswa</title>
</head>
<body>
	<div class="button_link"><a href="input.php">Input Data</a></div>
		<table class="tbl-qa"> 
		<thead>
			<tr>
				<th class="table-header" wnimmhsth="20%">NPM</th>
				<th class="table-header" wnimmhsth="20%">NAMA</th>
				<th class="table-header" wnimmhsth="20%"> KELAS </th>
				<th class="table-header" wnimmhsth="20%"> JURUSAN </th>
				<th class="table-header" wnimmhsth="20%"> FAKULTAS </th>
				<th class="table-header" wnimmhsth="20%"> ALAMAT </th>
				<th class="table-header" wnimmhsth="20%" colspan="2">Aksi</th>
			</tr>
		</thead>
	<tbody>  
	<?php	
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
	?>
		<tr class="table-row" id="row">
			<td class="table-row"><?php echo $row["npm"]; ?></td>
			<td class="table-row"><?php echo $row["nama"]; ?></td>
			<td class="table-row"><?php echo $row["kelas"]; ?></td>
			<td class="table-row"><?php echo $row["jurusan"]; ?></td>
			<td class="table-row"><?php echo $row["fakultas"]; ?></td>
			<td class="table-row"><?php echo $row["alamat"]; ?></td>
			<td class="table-row" colspan="2"><a href="update.php?npm=<?php echo $row["npm"]; ?>" class="link"><img title="update" src="icon/edit.png"/></a> <a href="delete.php?npm=<?php echo $row["npm"]; ?>" class="link"><img name="delete" npm="delete" title="Delete" onclick="return confirm('Yakin akan di Hapus?')" src="icon/delete.png"/></a></td>
		</tr>
	<?php
		}
    }
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
