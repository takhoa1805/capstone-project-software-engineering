<!DOCTYPE html>
<html>
<head>
	<meta lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, , initial-scale=1, user-scalable=no">
	<title>Products</title>
      <!-- Google Font API -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700;900&display=swap" rel="stylesheet">
	     <!-- style -->
  <link rel="stylesheet" href="../css/styles.css">
<!-- Import Framework -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
<!-- End of importing Framework -->
<!-- Import custom style -->
	<link rel="stylesheet" type="text/css" href="../css/styleGlobal.css">
	<link rel="stylesheet" type="text/css" href="../css/ProductAdmin.css">
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
<!--Product Admin main -->
    <div class="container Maincontainer " id="inner">
    <div class="MainPage">
        <div class="Left-Nav-bar">
            <div class="Sidebar">
                <div style="align-self: stretch;">
                    <div class="Category">
						<div class="Sidebar-header">Phân loại</div>
						<div class="Line5" style="align-self: stretch; height: 0px; border: 1px black solid"></div>
                        <nav class="navbar" style="display: flex; flex-direction: column; align-items: flex-start;">
							<a class="navbar-brand Sidebar-selection" id="filter-all" style="cursor:pointer">Tất cả</a>
							<a class="navbar-brand Sidebar-selection" id="filter-electronics"style="cursor:pointer">Đồ điện tử</a>
							<a class="navbar-brand Sidebar-selection" id="filter-clothes"style="cursor:pointer">Quần áo</a>
							<a class="navbar-brand Sidebar-selection" id="filter-tickets"style="cursor:pointer">Vé sự kiện</a>
							<a class="navbar-brand Sidebar-selection" id="filter-books"style="cursor:pointer">Giáo trình</a>
							<a class="navbar-brand Sidebar-selection" id="filter-households"style="cursor:pointer">Thiết bị gia dụng</a>
							<a class="navbar-brand Sidebar-selection" id="filter-else"style="cursor:pointer">Khác</a>
						</nav> 
                    </div>
                </div>
                <div class="arrange-list">
                    <div class="Sidebar-header">Sắp xếp</div>
                    <div class="Line5" style="align-self: stretch; height: 0px; border: 1px black solid"></div>
                    <div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
						<label class="form-check-label Sidebar-selection" for="inlineRadio1">Mặc định</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
						<label class="form-check-label Sidebar-selection" for="inlineRadio2">Giá thấp đến cao</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
						<label class="form-check-label Sidebar-selection" for="inlineRadio3">Giá cao đến thấp</label>
					</div>
                </div>
            </div>
        </div>
        <div class="List-container">
            <div class="Results" id='result'></div>
            <!-- PRODUCT LIST -->
            <div class="List-detail" id='product-container'>

            </div>
            <!-- END OF PRODUCT LIST -->
        </div>
    </div>
    </div>
    <br>
<!--End of Product Admin main -->
<!-------------------------------------------------------------------------------->
<div id="myfooter">
<!-- Footer -->
<?php include './components/footer.php';?>
<!-- End of Footer -->
</div>
<!-------------------------------------------------------------------------------->
<!-- Import Framework -->
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.bundle.js"></script>
<!-- End of importing Framework -->
<!-- Header Logic -->
<script type="text/javascript" src="../scripts/component/header.js"></script>
  <!-- Get account information -->
  <script type ="text/javascript" src ="../scripts/product_display.js"></script>
  <!-- Navigate to product detail -->
  <script type="text/javascript" src="../scripts/product_navigator.js"></script>
</body>

</html>