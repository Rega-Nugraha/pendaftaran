<!DOCTYPE html>
<html>
<head>
	<title>form pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Name Class Pendaftaran -->
	<div class="wrap">
		<div class="container">
			<!-- Formulir Pendaftaran -->
			<h1>Form Pendaftaran</h1>
				<form action="form_add_aksi.php" method="POST">
					<table>
						<tr>
							<td>Nama Lengkap</td>
							<td>:</td>
							<td><input type="text" name="nama_lengkap"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><textarea name="alamat"></textarea></td>
						</tr>
						<tr>
							<td>Tempat Lahir</td>
							<td>:</td>
							<td><input type="text" name="tempat_lahir"></td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td>:</td>
							<td><input type="date" name="tanggal_lahir"></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td>
								<input type="radio" name="jk" value="Laki-Laki">Laki Laki
								<input type="radio" name="jk" value="Perempuan">Perempuan
							</td>
						</tr>
						<tr>
							<td>No Telepone</td>
							<td>:</td>
							<td><input type="number" name="no_telepon"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td><input type="text" name="email"></td>
						</tr>
						<tr>
							<td>Kecamatan</td>
							<td>:</td>
							<td>
								<select name="kecamatan">
									<option>--Pilih Kecamatan--</option>
									<option>Cikarang Timur</option>
									<option>Cikarang Kota</option>
									<option>Cikarang Pusat</option>
									<option>Cikarang Barat</option>
									<option>Cikarang Utara</option>
									<option>Cikarang Selatan</option>
								</select>
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<button type="submit" name="kirim">Kirim</button>
								<button type="reset" name="reset">Batal</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
</body>
</html>