<?php
session_start();

// kiểm tra thông tin đăng nhập
if ($_POST['username'] == 'admin' && $_POST['password'] == '12345') {
	// tạo mã OTP và lưu vào session
	$otp = rand(100000, 999999);
	$_SESSION['otp'] = $otp;
	// chuyển hướng đến trang xác minh OTP
	header('Location: otp.php');
	exit;
} else {
	// thông báo đăng nhập không thành công
	echo "Tên đăng nhập hoặc mật khẩu không đúng.";
}
?>





 


