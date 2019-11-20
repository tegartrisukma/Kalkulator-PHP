<!DOCTYPE html>
<html>
<head>
<!-- Link CSS Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Link style.css -->
<link rel="stylesheet" href="style.css">

	<title>Kalkulator PHP</title>
</head>
<body>
<!-- Script Kalkulator PHP -->
	<?php 															
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>

	<div class="kalkulator">
		<h2 class="judul">PIPOLONDO</h2>
		<form method="post" action="index.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off">
			<small class="form-text text-muted">Masukkan Bilangan Pertama</small>
			<input type="text" name="bil2" class="bil" autocomplete="off">
			<small class="form-text text-muted">Masukkan Bilangan Kedua</small>
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>