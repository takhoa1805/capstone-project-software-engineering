<!DOCTYPE html>
<html>
<head>
	<meta lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, , initial-scale=1, user-scalable=no">
	<title>Cart</title>
    <!-- Google Font API -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700;900&display=swap" rel="stylesheet">

       <!-- style -->
  <link rel="stylesheet" href="../css/styles.css">
<!-- Import Framework -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<!-- End of importing Framework -->
<!-- Import custom style -->
	<link rel="stylesheet" type="text/css" href="../css/styleGlobal.css">
	<link rel="stylesheet" type="text/css" href="../css/Cart.css">
<!-- End of importing custom style -->
	<!-- Verifying authentication -->
	<script type="text/javascript" src="../scripts/auth.js"></script>
</head>
<body>
<!-- Header -->
	<?php include './components/header.php';?>

<!-- End of Header -->
<!-------------------------------------------------------------------------------->
<!-- Navigation Bar -->
<?php include './components/navbar.php';?>
<!-- End of Navigation Bar -->
<!-------------------------------------------------------------------------------->
<!--Cart main -->
<div class="container MainContainer">
    <div class="MainPage">
      <div class="Cart-label">Giỏ hàng của bạn</div>
      <div class="Cart-container">
        <div class="CartProductList" id="product-container">
          <!-- BEGIN PRODUCT LISING -->


            <!-- END OF PRODUCT LISTING -->
        </div>
        <div class="CartSummary">
          <div class="CartPayment">
            <div class="CartPayment-detail" style="gap: 12px;">
              <div class="cost-temp">
                <div class="cost-text">Tạm tính</div>
                <div class="cost-text" id="total-cost"></div>
              </div>
              <div class="cost-other">
                <div class="cost-text" >Chi phí khác</div>
                <div class="cost-text" id="extra-cost">0đ</div>
              </div>
              <div class="Line4" style="width: 353px; height: 0px; border: 1px black solid"></div>
            </div>
            <div class="CartPayment-detail" style="align-items: flex-end; gap: 24px;">
              <div class="cost-total">
                <div class="cost-text" style="font-size: 16px;font-weight: 700;" >Tổng</div>
                <div class="cost-text" style="font-size: 16px;font-weight: 700;"id="final-cost"></div>
              </div>
              <a class="btn btn-primary" id='cart-continue' role="button" style="display: flex; align-items: center; gap: 10px;">
                <div class="Text">Tiếp tục</div>
                <i class="bi bi-arrow-right-short"></i>
              </a>
            </div>
            <div class="CartPayment-detail" style="align-items: flex-end; gap: 12px;">
              <div class="Line5" style="width: 353px; height: 0px; border: 1px black solid"></div>
              <div class="cost-note">
                <div class="cost-text" style="font-size: 12px;">Yêu cầu khiếu nại, đổi trả trong vòng một tuần</div>
              </div>
              <div class="cost-note">
                <div class="cost-text" style="font-size: 12px;">Vui lòng kiểm tra kỹ sản phẩm trước khi chấp nhận thanh toán</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--End of Cart main -->
<!-------------------------------------------------------------------------------->
<!-- Footer -->
<?php include './components/footer.php';?>
<!-- End of Footer -->
<!-------------------------------------------------------------------------------->
<!-- Import Framework -->
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.bundle.js"></script>
<!-- End of importing Framework -->
<!-- Header Logic -->
<script type="text/javascript" src="../scripts/component/header.js"></script>
  <!-- Navigate to product detail -->
  <script type="text/javascript" src="../scripts/product_navigator.js"></script>
  <!-- CART Logic -->
  <script type="text/javascript" src="../scripts/cart.js"></script>
</body>
</html>