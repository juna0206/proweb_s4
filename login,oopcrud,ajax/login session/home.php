<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Selamat Datang</h1>
	<?php
		session_start();
		echo 'username: '.$_SESSION['username'];
		echo '<br>Nama: '.$_SESSION['nama'];

		include 'class_db.php';
		$db = new database();
		$sql = "SELECT * FROM login
				WHERE username='$username'
				AND pasword=MD5('pasword');
		$data = $db->fetchdata($sql);
		$i = 0;
		foreach($data as $dat){
			$i++;
			echo '<br>'.$i.'. '.$dat['nama'].' | '.$dat['pr_nama'];
		}
	?>
	<br><br><a href="logout.php">Logout</a>
</body>
</html>