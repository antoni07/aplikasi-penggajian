<?php
	include 'config.php';
	$data = mysql_query("SELECT * FROM tb_gaji");
	
	
?>
<html>
<head>
	<title>Print Document</title>
    
     <div style="text-align:center;">
    <h1>Daftar Data Penggajian Karyawan</h1>
    <h1>PT.Sejahtera</h1>
	
    </div>
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
    
    <script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
      <p align='right'>Bandung,10 Desember 2015</p>. 
      
      
    
    <p> `  </p>
    <p>  ` </p>
	 
     <p align='right'>( pimpinan perusahaan )</p>";
</body>

</html>