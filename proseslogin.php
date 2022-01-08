<?php 
	session_start();
	include'konek.php';

	$username = $_POST['username'];
	$password1 = $_POST['password'];
	$password = sha1($password1);

	$login = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
	$cek = mysqli_num_rows($login);

	if ($cek > 0) {
		$data = mysqli_fetch_assoc($login);
		if ($data['level']=="admin") {
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			header("location:admin/home-admin.php");
		}else if($data['level']=="user"){
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $nama;
			$_SESSION['level'] = "user";
			header("location:user/index.php");
		}else{
			echo "<script> alert('Gagal Login'); document.location.href='login.php'</script>";
		}
	}
 ?>