<!DOCTYPE <html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css" media="screen">
		body{
			background-color: black;
			color: white;
			margin-left: 90px;
			margin-top: 30px;
			}
		div {
			width: 30px;
			height: 30px;
			display: inline-block;
		}
	</style>
</head>
<body>
		<h1>TANGGA DOWN!</h1>
	<form action="" method="post">
		<label for=""> JUMLAH ANAK TANGGA: </label>
		<input type="number" name="jumlahAnakTangga" autocomplete="off" max="36">
		<br><br>
		<label for=""> WARNA: </label>
		<input type="radio" name="warna" value="green"> HIJAU
		<input type="radio" name="warna" value="purple" > UNGU
		<input type="radio" name="warna" value="yellow" > KUNING
		<input type="radio" name="warna" value="blue" > BIRU
		<input type="radio" name="warna" value="grey" > ABU-ABU
		<br><br>
		<button type="submit" name="submit" value="">SUBMIT</button>
	</form>
	<br>
	<!-- PHP -->
	<?php
	if(isset($_POST['submit'])) :
		$warna = $_POST['warna'];
		for($i=0; $i<$_POST['jumlahAnakTangga']; $i++):
			for($j=$_POST['jumlahAnakTangga']; $j>$i; $j--):
	?>
		<div style="background: <?= $warna ?>"></div>

	<?php
			endfor;
			echo "<br>";
		endfor;
	endif;
	?>
</body>
</html>
