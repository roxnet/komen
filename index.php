<?php
	include_once "koneksi.php";
?>
<!DOCTYPE html>
<html>
  <head>
	  <script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script type="text/javascript">
	
	function chat(){
		var nama=$('#nama').val();
		var komen=$('#komen').val();
			$.ajax({
				url	     : 'load.php',
				type     : 'GET',
				dataType : 'HTML',
				data     : 'nama='+nama+'&komen='+komen,
				success  : function(respons){
					$('#pesan').html(respons);
					
				},
			});
	}
	
	</script>
</head>
<body>
		<div style="width:300px;margin:0 auto;padding:10px; border:1px solid black">
			<div id="pesan">
				<?php 
					$data="select * from pesan";
					$nilai=mysqli_query($kon,$data);
					while($hasil=mysqli_fetch_array($nilai)){
						echo "<div style='background-color:magenta;padding:10px;'>$hasil[nama]</div>
						<div style='background-color:gray;padding:10px;margin-bottom:10px;'>$hasil[pesan]</div>
						";
					}?>
			</div><br/><hr/>
			<div>
				<h2>TINGGALKAN PESAN</h2><hr/>
					<table>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type='text' id='nama' name='nama'></td>
						</tr>
						<tr>
							<td>Pesan</td>
							<td>:</td>
							<td><textarea id='komen' name='komen'></textarea></td>
						</tr>
						<tr>
							<td colspan='3'><button type='submit' onclick='chat()'>KOMENTAR</button></td>
						</tr>
					</table>
			</div>
		</div>
</body>
</html>