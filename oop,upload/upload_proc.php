<?php
	echo '<br>'.$_FILES['dokumen']['name'];
	echo '<br>'.$_FILES['dokumen']['size'];
	$target_dir = "files/";
	$file_name = 'hotel.png';
	//$target_file = $target_dir . basename($_FILES["dokumen"]["name"]);
	$target_file = $target_dir . $file_name;

	echo '<br>'.$ekstension_file = substr($_FILES['dokumen']['name'],-3,3);

	if($ekstension_file=='png' || $ekstension_file=='PNG' || $ekstension_file=='jpg' || $ekstension_file=='JPG' ){
		if($_FILES['dokumen']['size']<10240000){
			if (move_uploaded_file($_FILES["dokumen"]["tmp_name"], $target_file)) {
			    echo "<br>The file ". htmlspecialchars( basename( $_FILES["dokumen"]["name"])). " has been uploaded.";
			} 
			else {
				echo "<br>Sorry, there was an error uploading your file.";
			}
		}
		else
			echo "<br>Ukuran file melebihi batas maksimal";
	}
	else
		echo "<br>Format file yang diijinkan png";
?>