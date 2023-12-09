<!DOCTYPE html>
<html>
<head>
	<meta lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, , initial-scale=1, user-scalable=no">
	<title>Product Details</title>
      <!-- Google Font API -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700;900&display=swap" rel="stylesheet">
	     <!-- style -->
  <link rel="stylesheet" href="../css/styles.css">
<!-- Import Framework -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
<!-- End of importing Framework -->
<!-- Import custom style -->
	<link rel="stylesheet" type="text/css" href="../css/styleGlobal.css">
	<link rel="stylesheet" type="text/css" href="../css/ProductDetailAdmin.css">
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
<!--Product Details main -->
    <div class="container Maincontainer">
		<div class="Return row">
			<nav class="navbar navbar-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="/client/pages/product.php">
						<i class="bi bi-box-arrow-in-left" style="color: black; text-decoration: underline;">Quay lại</i>
					</a>
				</div>
			</nav>
			<button class="btn btn-primary btn btn-primary m-0 align-content-end align-self-end " type="button" id="add-to-cart" style="float:right;">Thêm vào giỏ</button>
		</div>
		<div class="Product-header-container">
			<div class="Product-header">
				<span class="Product-Name" id="product-name">DEDSEC Laptop 13 (DMA Ryzen™ 7040 Series)</span>
				<span class="Product-Price " id='product-price'>$2,499.00</span>
				<span class="Product-Price " id='product-left'></span>

			</div>
		</div>
		<!--Slide-->
		<div class="container text-center my-3">
			<div class="row mx-auto my-auto justify-content-center">
				<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner" role="listbox" id="carousel-container">
						<div class="carousel-item active">
							<div class="col-12 align-content-center">
								<img src="" class="img-fluid"  id="first-image" style="height:500px">
							</div>
						</div>
						<a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						</a>
						<a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
						</a>
					</div>
				</div>		
			</div>
		</div>
		<!--End Slide-->
		<!--Nav bar-->
		<div class="NavigationBar" style="width: 100%; display: flex; flex-direction: column;">
			<div style="align-self: auto; height: 0px; border: 1px black solid; margin: 10px"></div>
			<nav class="navbar">
				<div class="container-fluid justify-content-center">
					<a class="navbar-brand px-4 detail-label fs-5" href="#introduction">Giới thiệu</a>
					<a class="navbar-brand px-4 detail-label fs-5" href="#specification">Mô tả</a>
					<a class="navbar-brand px-4 detail-label fs-5" href="#status">Tình trạng</a>
					<a class="navbar-brand px-4 detail-label fs-5" href="#reasonforsale">Lý do cần bán</a>
					<a class="navbar-brand px-4 detail-label fs-5" href="#note">Ghi chú khác</a>
				</div>
			</nav>
			<div style="align-self: auto; height: 0px; border: 1px black solid; margin: 10px"></div>
		</div>
		<!--End Nav bar-->
		<!-- INTRODUCTION -->
		<div class="Overview-container" id="introduction">

		</div>
		<!-- END OF INTRODUCTION -->

		<!-- SPECIFICATION -->
		<div class="Line7" style="align-self: stretch; height: 0px; border: 1px black solid ;margin: 10px"></div>
		<div class="Specs-container" id="specification">

		</div>
		<!-- END OF SPECIFICATION -->

		<!-- STATUS -->
		<div class="Line8" style="align-self: stretch; height: 0px; border: 1px black solid; margin: 10px"></div>
		<div class="TheBox-container" id="status">

			</div>

		<!-- END OF STATUS -->
		
		<!-- REASON FOR SALE -->
		<div class="Line9" style="align-self: stretch; height: 0px; border: 1px black solid; margin: 10px"></div>
		<div class="Reviews-container" id="reasonforsale">

		</div>

		<!-- END OF REASON FOR SALE -->
		
		<!-- NOTE -->
		<div class="Line9" style="align-self: stretch; height: 0px; border: 1px black solid; margin: 10px"></div>
		<div class="Support-container" id="note">

		</div>
		<!-- END OF NOTE -->

	</div>


<!--End of Products Detail  main -->
<!-------------------------------------------------------------------------------->
<!-- Footer -->
<?php include './components/footer.php';?>
<!-- End of Footer -->
<!-------------------------------------------------------------------------------->
<!-- Import Framework -->
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../scripts/ProductDetailAdmin.js"></script>
<!-- End of importing Framework -->
<!-- Header Logic -->
<script type="text/javascript" src="../scripts/component/header.js"></script>
  <!--  product detail logic-->
  <script type="text/javascript" src="../scripts/product_details.js"></script>
</body>
</html>
