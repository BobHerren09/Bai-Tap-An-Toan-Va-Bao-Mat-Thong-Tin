<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
			color: #333;
		}
		form {
			max-width: 400px;
			margin: 50px auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			border-radius: 5px;
		}
		label {
			display: block;
			margin-bottom: 10px;
			color: #666;
		}
		input[type="username"],
		input[type="password"],
		input[type="text"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
			font-size: 16px;
		}
		input[type="submit"] {
			background-color: #0084ff;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #0073e6;
		}
	</style>
</head>
<body>
	<h1>Đăng nhập</h1>
	<form method="post" action="login.php">
		<label for="username">Tên đăng nhập:</label>
		<input type="username" name="username" required>
		<label for="password">Mật khẩu:</label>
		<input type="password" name="password" required>
		<input type="submit" value="Đăng nhập">
	</form>
</body>
</html>
