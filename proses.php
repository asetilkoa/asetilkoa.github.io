<?php 
	require_once('koneksi.php');
 ?>
<?php 
if (isset($_POST)) {

		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "INSERT INTO registrasi(username, email, password) VALUES(?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$username, $email, $password]);
		if ($result) {
			echo "Successfully saved";
		}else{
			echo 'ada yang error.';
		}
}else{
	echo 'No data';
}