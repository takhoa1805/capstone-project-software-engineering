<!DOCTYPE html>
<html>
<head>
	<meta lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, , initial-scale=1, user-scalable=no">
	<title>Đăng ký, đăng nhập vào hệ thống BKPee</title>
      <!-- Google Font API -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700;900&display=swap" rel="stylesheet">
<!-- Import Framework -->
	<!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="./css/bootstrap/css/bootstrap.css">

<!-- End of importing Framework -->
<!-- Import custom style -->
	<link rel="stylesheet" type="text/css" href="./css/styleGlobal.css">
	<link rel="stylesheet" type="text/css" href="./css/signInUp.css">
<!-- End of importing custom style -->
</head>
<body>
<!-- Header -->
<?php include './pages/components/header_index.php';?>
<!-- End of Header -->

<!-------------------------------------------------------------------------------->
<!-- Sign in/Sign up main -->
	<div class="container mainContainer">
		<div class="container loginContainer">
			<form>
				<div class="mainTitle">Đăng nhập</div>
				<div class="mt-1">
					<label for="login-email" class="form-label labelText">Email đăng nhập</label>
					<input type="email" class="form-control" id="login-email">
				</div>
				<div class="mt-1">
					<label for="login-password" class="form-label labelText">Mật khẩu đăng nhập</label>
					<input type="password" class="form-control" id="login-password">
				</div>
				<div class="mt-2">
					<button type="button" class="btn btn-primary" id="login-button">Đăng nhập</button>
				</div>
			</form>
		</div>
		<div class="container signUpContainer">
			<form>
				<div class="mainTitle">Đăng ký tài khoản</div>
				<div class="mt-1">
					<label for="nameSignUp" class="form-label labelText">Họ và tên</label>
					<input type="text" class="form-control" id="nameSignUp" placeholder="Nhập họ và tên">
				</div>
				<div class="mt-1">
					<label for="emailSignUp" class="form-label labelText">Email (@hcmut.edu.vn)</label>
					<input type="email" class="form-control" id="emailSignUp" placeholder="Nhập Email">
				</div>
				<div class="mt-1">
					<label for="passSignUp" class="form-label labelText" >Mật khẩu</label>
					<input type="password" class="form-control" id="passSignUp" placeholder="Nhập mật khẩu" aria-describedby="passNote">
					<div id="passNote" class="form-text noteText">Ít nhất 12 ký tự, bao gồm chữ cái thường, chữ số và ký tự đặc biệt.</div>
				</div>
				<div class="mt-1">
					<label for="passConfirm" class="form-label labelText" >Xác nhận mật khẩu</label>
					<input type="password" class="form-control" id="passConfirm" placeholder="Nhập lại mật khẩu" aria-describedby="passConfirmNote">
					<div id="passConfirmNote" class="form-text noteText">Việc đăng ký xác nhận bạn đã thông qua <a href="">Điều khoản dịch vụ</a> và <a href="">Chính sách bảo mật</a>.</div>
				</div>
				<div class="mt-2">
					<button type="submit" class="btn btn-primary">Đăng ký</button>
				</div>
			</form>
		</div>
		<div class="container forgetPasswordContainer">
			<form>
				<div class="mainTitle">Quên mật khẩu?</div>
				<div class="mt-1">
					<label for="forgetEmail" class="form-label labelText">Vui lòng nhập emil của bạn để tiếp tục</label>
					<input type="email" class="form-control" id="forgetEmail" placeholder="Nhập email để tiếp tục...">
				</div>
				<div class="mt-2">
					<button type="submit" class="btn btn-primary">Tiếp tục</button>
				</div>
			</form>
		</div>
	</div>
<!--End of Sign in/Sign up main -->
<!-------------------------------------------------------------------------------->
<!-- Footer -->
<?php include './pages/components/footer_index.php';?>
<!-- End of Footer -->
<!-------------------------------------------------------------------------------->
<!-- Import Framework -->
	<script type="text/javascript" src="./css/bootstrap/js/bootstrap.bundle.js"></script>
<!-- End of importing Framework -->

<!-- LOGIN LOGICS -->
<script type="text/javascript" src="./scripts/login/login.js"></script>

</body>
</html>