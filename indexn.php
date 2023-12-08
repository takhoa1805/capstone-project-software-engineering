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
	<link rel="stylesheet" type="text/css" href="./css/bootstrap/css/bootstrap.css">
<!-- End of importing Framework -->
<!-- Import custom style -->
	<link rel="stylesheet" type="text/css" href="./css/styleGlobal.css">
	<link rel="stylesheet" type="text/css" href="./css/signInUp.css">
	<link rel="stylesheet" href="../css/header_footer.css">
<!-- End of importing custom style -->
</head>
<body>
<!-- Header -->
<?php include './pages/components/header.php';?>
<!-- End of Header -->


<!-------------------------------------------------------------------------------->
<!-- Sign in/Sign up main -->
	<div class="container mainContainer">
		<div class="container loginContainer">
			<form id = "login-form">
				<div class="mainTitle">Đăng nhập</div>
				<div class="mt-1">
					<label for="emailLogin" class="form-label labelText">Email đăng nhập</label>
					<input type="email" class="form-control" id="emailLogin">
					<span class="form-message"></span>
				</div>
				<div class="mt-1">
					<label for="passLogin" class="form-label labelText">Mật khẩu đăng nhập</label>
					<input type="password" class="form-control" id="passLogin">
					<span class="form-message"></span>
				</div>
				<div class="mt-2">
					<button type="submit" class="btn btn-primary">Đăng nhập</button>
				</div>
			</form>
		</div>
		<div class="container signUpContainer">
			<form id="sign-up-form">
				<div class="mainTitle">Đăng ký tài khoản</div>
				<div class="form-group mt-1">
					<label for="nameSignUp" class="form-label labelText">Họ và tên</label>
					<input type="text" class="form-control" id="nameSignUp" placeholder="Nhập họ và tên">
					<span class="form-message"></span>
				</div>
				<div class="form-group mt-1">
					<label for="emailSignUp" class="form-label labelText">Email (@hcmut.edu.vn)</label>
					<input type="email" class="form-control" id="emailSignUp" placeholder="Nhập Email">
					<span class="form-message"></span>
				</div>
				<div class="mt-1">
					<label for="passSignUp" class="form-label labelText" >Mật khẩu</label>
					<input type="password" class="form-control" id="passSignUp" placeholder="Nhập mật khẩu" aria-describedby="passNote">
					<span class="form-message"></span>
					<div id="passNote" class="form-text noteText">Ít nhất 12 ký tự, bao gồm chữ cái thường, chữ số và ký tự đặc biệt.</div>
				</div>
				<div class="mt-1">
					<label for="passConfirm" class="form-label labelText" >Xác nhận mật khẩu</label>
					<input type="password" class="form-control" id="passConfirm" placeholder="Nhập lại mật khẩu" aria-describedby="passConfirmNote">
					<span class="form-message"></span>
					<div id="passConfirmNote" class="form-text noteText">Việc đăng ký xác nhận bạn đã thông qua <a href="">Điều khoản dịch vụ</a> và <a href="">Chính sách bảo mật</a>.</div>
				</div>
				<div class="mt-2">
					<button type="submit" class="btn btn-primary">Đăng ký</button>
				</div>
			</form>
		</div>
		<div class="container forgetPasswordContainer">
			<form class="forget-form">
				<div class="mainTitle">Quên mật khẩu?</div>
				<div class="mt-1">
					<label for="forgetEmail" class="form-label labelText">Vui lòng nhập email của bạn để tiếp tục</label>
					<input type="email" class="form-control" id="forgetEmail" placeholder="Nhập email để tiếp tục...">
					<span class="form-message"></span>
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
<?php include './pages/components/footer.php';?>
<!-- End of Footer -->
<!-------------------------------------------------------------------------------->
<!-- Import Framework -->
	<script type="text/javascript" src="./scripts/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="scripts/validation.js"></script>
	<script>
		Validator({
			form: 'sign-up-form',
			rules: [
				Validator.isRequired('nameSignUp'),
				Validator.isEmail('emailSignUp'),
				Validator.isPassword('passSignUp'),
				Validator.confirmPass('passConfirm'),
			],
		});
		Validator({
			form: 'login-form',
			rules: [
				Validator.isEmail('emailLogin'),
				Validator.isPassword('passLogin'),
			],
		})
		Validator({
			form: 'forget-form',
			rules: [
				Validator.isEmail('forgetEmail'),
			],
		})
	</script>
<!-- End of importing Framework -->
</body>
</html>