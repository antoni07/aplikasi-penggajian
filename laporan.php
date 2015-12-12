<?php
	include 'config.php';
	$data = mysql_query("select * from tb_gaji");
?>
<html>
<head>
	<title>report</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<table border="1" width="90%" style="border-collapse:collapse;" align="center">
    	<tr class="tableheader">
        	
            <th>id Pegawai</th>
            <th>kode gaji</th>
            <th>jam lembur</th>
            <th>uang lembur</th>
            <th>tottal gaji</th>
            <th>bulan transfer</th>
           
        </tr>
        <?php while($hasil = mysql_fetch_array($data)){ ?>
        <tr id="rowHover">
        	
            <td width="5%" id="column_padding"><?php echo $hasil['kary_id']; ?></td>
            <td width="10%" id="column_padding"><?php echo $hasil['kode_gaji']; ?></td>
            <td width="10%" id="column_padding"><?php echo $hasil['jam_lembur']; ?></td>
            <td width="10%" id="column_padding"><?php echo $hasil['uang_lembur']; ?></td>
            <td width="10%" id="column_padding"><?php echo $hasil['total_gaji']; ?></td>
            <td width="10%" id="column_padding"><?php echo $hasil['bulan_transfer']; ?></td>
          
        
        </tr>
        <?php } ?>
    </table>
    <br />
    <button style="margin-left:5%" onclick="print_d()">Print Document</button>
    <script>
		function print_d(){
			window.open("print.php","_blank");
		}
	</script>
</body>
</html>