<?php 
	require 'konek.php';

	if(isset($_POST['username'])){
		$username = stripslashes($_POST['username']);
		$username = mysqli_real_escape_string($koneksi,$username);
		$nama= stripslashes($_POST['nama']);
		$nama = mysqli_real_escape_string($koneksi,$nama);
		$email = stripslashes($_POST['email']);
		$email = mysqli_real_escape_string($koneksi,$email);
		$password1 = $_POST['password'];
		$password = sha1($password1);
		$id = time();
		$cek = mysqli_query($koneksi, "SELECT * FROM users WHERE nama='$nama'");
		if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO users (id, username, nama, email, password, level) VALUES ('$id', '$username', '$nama', '$email', '$password', 'user')") or die(mysqli_error($koneksi));
						if($insert){
							echo "<script>
									alert('Data Berhasil Di Simpan');
									document.location.href = 'login.html';
								  </script>";
						}else{
							echo "<script>
									alert('Ups Data Gagal Di Simpan!');
									document.location.href = 'register.php';
								  </script>";
						}
				}else{
					echo "<script>
							alert('Member Sudah Ada . . .!!');
							document.location.href = 'register.php';
						 </script>";
				}
	}
 ?>