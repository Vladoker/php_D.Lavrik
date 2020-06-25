<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if($_POST['login'] ?? '' != '' && $_POST['pass'] ?? '' != '' ) {
		
			$login = trim($_POST['login']);
			$pass = md5(trim($_POST['pass']));
		
			$handle = @fopen("./pass.txt", "r");

			if ($handle) {
				$flag = false;
				while (($buffer = fgets($handle, 4096)) !== false) {
					
					$arr = explode(':', trim($buffer));
					if($arr[0] == $login && $arr[1] == $pass) {
						session_start();
						$_SESSION['registered_user'] = $login;
						$flag = true;
						break;
					}
				}
			
				fclose($handle);
				$flag ? header('Location: upload.php') : header('Location: register.php');
				
				exit();
			
			}
		}


	}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body>
	<?php include("./model.php");?>

	<div class="container">
	<div class="d-flex justify-content-center align-content-center">
		<a href="./register.php">Register</a>
	</div>
	</div>
</body>

</html>