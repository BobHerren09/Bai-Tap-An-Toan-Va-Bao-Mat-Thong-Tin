<?php
session_start();
echo "mã OTP:", $_SESSION['otp'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Xác minh mã OTP</title>
	<style>
		body {
			background-color: #e8e8e8;
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
			color: #444;
			margin-top: 50px;
			margin-bottom: 30px;
		}
		form {
			max-width: 500px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			box-shadow: 0 0 20px rgba(0,0,0,0.1);
			border-radius: 5px;
		}
		input[type="text"] {
			padding: 10px;
			width: 100%;
			margin-bottom: 20px;
			border-radius: 3px;
			border: 1px solid #ccc;
			box-sizing: border-box;
			font-size: 16px;
			color: #444;
			outline: none;
		}
		input[type="submit"] {
			background-color: #008CBA;
			color: #fff;
			border: none;
			padding: 10px 20px;
			font-size: 16px;
			border-radius: 3px;
			cursor: pointer;
			transition: background-color 0.3s;
		}
		input[type="submit"]:hover {
			background-color: #006d8c;
		}
		.otp-code {
			font-size: 24px;
			margin: 50px 0;
			text-align: center;
			color: #008CBA;
		}
	</style>
</head>
<body>
	<h1>Xác minh mã OTP</h1>
	<form action="verify.php" method="post">
		<label for="otp">Nhập mã OTP:</label>
		<input type="text" id="otp" name="otp" placeholder="Nhập mã OTP">
		<input type="submit" value="Xác minh">
	</form>
	<?php
	if(isset($_POST['otp'])){
		$otp = $_POST['otp'];
		echo '<div class="otp-code">Mã OTP của bạn là: '.$otp.'</div>';
	}
	?>
</body>
</html>
