<?php
session_start(); 
// kiểm tra mã OTP nhập vào và mã OTP đã lưu trong session
if ($_POST['otp'] ==strval ($_SESSION['otp'])) {

	// xác minh thành công, hiển thị thông báo
	echo "Đăng nhập thành công! Đang Chuyển Hướng.";
	header('Refresh: 3; URL= https://www.youtube.com/watch?v=dQw4w9WgXcQ');
} else {
	// xác minh không thành công, hiển thị thông báo
	echo "Mã OTP không đúng.";
}
?>
