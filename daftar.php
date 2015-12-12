<?php
	include 'config.php';
	$data = mysql_query("select * from tb_karyawan");
?>
<html>
<head>
	<title>Aplikasi CRUD PHP</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>

	<table border="1" width="90%" style="border-collapse:collapse;" align="center">
    	<tr class="tableheader">
        	
            <th>id Pegawai</th>
            <th>kode pegawai</th>
            <th>nama</th>
            <th>alamat</th>
            <th>no. rek</th>
            <th>gaji utama</th>
			<th>golongan</th>
           
        </tr>
        <?php while($hasil = mysql_fetch_array($data)){ ?>
        <tr id="rowHover">
        	
            <td width="5%" id="column_padding"><?php echo $hasil['kary_id']; ?></td>
            <td width="10%" id="column_padding"><?php echo $hasil['kode_kar']; ?></td>
            <td width="10%" id="column_padding"><?php echo $hasil['nama_kar']; ?></td>
            <td width="10%" id="column_padding"><?php echo $hasil['alamat_kar']; ?></td>
            <td width="10%" id="column_padding"><?php echo $hasil['no_rek']; ?></td>
            <td width="10%" id="column_padding"><?php echo $hasil['gaji_utama']; ?></td>
			<td width="10%" id="column_padding"><?php echo $hasil['gol_kar']; ?></td>
          
        
        </tr>
        <?php } ?>
    </table>
    <br />
    <button style="margin-left:5%" onclick="print_d()">Print Document</button>
    <script>
		function print_d(){
			window.open("print1.php","_blank");
		}
	</script>
</body>
</html>