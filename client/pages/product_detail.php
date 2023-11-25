<!DOCTYPE html>
<html>
<head>
	<meta lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, , initial-scale=1, user-scalable=no">
	<title>Product Details Admin</title>
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
<!--Product Details Admin main -->
    <div class="container Maincontainer">
    <div class="Return">
        <nav class="navbar navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <i class="bi bi-box-arrow-in-left" style="color: black; text-decoration: underline;">Quay lại</i>
                </a>
            </div>
          </nav>
    </div>
    <div class="Product-header-container">
        <div class="Product-header">
            <div class="Product-Name">DEDSEC Laptop 13 (DMA Ryzen™ 7040 Series)</div>
            <div class="Product-Price">$2,499.00</div>
        </div>
    </div>
    <!--Slide-->
    <div class="container text-center my-3">
		<div class="row mx-auto my-auto justify-content-center">
			<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="../images/1.png" class="img-fluid" style="height: 350px;">
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="../images/2.png" class="img-fluid" style="height: 350px;">
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="../images/1.png" class="img-fluid" style="height: 350px;">
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="../images/2.png" class="img-fluid" style="height: 350px;">
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="../images/1.png" class="img-fluid" style="height: 350px;">
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="col-md-3">
							<div class="card">
								<div class="card-img">
									<img src="../images/2.png" class="img-fluid" style="height: 350px;">
								</div>
							</div>
						</div>
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
    <!--End Slide-->
	<!--Nav bar-->
    <div class="NavigationBar" style="width: 100%; display: flex; flex-direction: column;">
		<div style="align-self: auto; height: 0px; border: 1px black solid"></div>
        <nav class="navbar">
			<div class="container-fluid justify-content-center">
				<a class="navbar-brand px-4 detail-label fs-5" href="#Overview">Overview</a>
				<a class="navbar-brand px-4 detail-label fs-5" href="#Specs">Specs</a>
				<a class="navbar-brand px-4 detail-label fs-5" href="#TheBox">What’s in the box</a>
				<a class="navbar-brand px-4 detail-label fs-5" href="#Reviews">Reviews</a>
				<a class="navbar-brand px-4 detail-label fs-5" href="#Support">Support</a>
			</div>
		</nav>
		<div style="align-self: auto; height: 0px; border: 1px black solid"></div>
    </div>
	<!--End Nav bar-->
    <div class="Overview-container" id="Overview">
        <div class="Overview-label">Overview</div>
        <div class="Overview-detail">
            <div class="detail-1">
                <img style="width: 515px; height: 454px" src="../images/3.png" />
                <div style="flex: 1 1 0">
					<span class="detail-label">Truly personal computing<br /></span>
					<span class="detail-text">
						The DEDSEC Laptop 13 has an extremely modular design that gives you full control. Order the DIY
                        Edition and build it yourself, or choose pre-built to have a system ready to go out of the box.
                        Replace any part, upgrade key components, and customize like never before.
					</span>
				</div>
            </div>
            <div class="detail-2">
                <div style="flex: 1 1 0">
					<span class="detail-label">Expansion Cards<br /></span>
					<span class="detail-text">
						External adapters are a thing of the past. The Framework Expansion Card system lets you choose exactly
                        the ports you want and where you want them. With four bays, you can select from USB-C, USB-A,
                        HDMI, DisplayPort, MicroSD, Ethernet, Audio, ultra fast storage, and more.
					</span>
				</div>
                <img style="width: 515px; height: 504px" src="../images/4.png" />
            </div>
            <div class="detail-3">
                <img style="align-self: stretch; height: 572px" src="../images/5.png" />
                <div style="align-self: stretch">
					<span class="detail-label">Keyboard<br /></span>
					<span class="detail-text">
						The DEDSEC Laptop has a great feeling keyboard with a toggleable backlight. While most compact
						notebooks have shrunk to between 0.8mm and 1.2mm travel, we’ve chosen a better balance of 1.5mm
						to deliver excellent feel while keeping the system highly portable. Available in 12 languages
						and clear and blank options. Plus, more coming soon!
					</span>
				</div>
            </div>
        </div>
    </div>
    <div class="Line7" style="align-self: stretch; height: 0px; border: 1px black solid"></div>
    <div class="Specs-container" id="Specs">
        <div class="Specs-label">Specs</div>
        <div class="Specs-detail">
            <div class="detail-label">Processor options</div>
            <ul class="detail-text">
                <li>DMA Ryzen™ 7 7840U (up to 5.1GHz, 8 cores)</li>
				<li>ENTEL® Core™ i7-1360P (up to 5.0GHz, 4+8 cores)</li>
				<li>ENTEL® Core™ i7-1370P (up to 5.2GHz, 6+8 cores)</li>
			</ul>
            <div class="detail-label">Memory options</div>
            <ul class="detail-text">
                <li>DDR5-5600 - 8GB (1 x 8GB)</li>
				<li>DDR5-5600 - 16GB (2 x 8GB)</li>
				<li>DDR5-5600 - 16GB (1 x 16GB)</li>
				<li>DDR5-5600 - 32GB (1 x 32GB)</li>
				<li>DDR5-5600 - 32GB (2 x 16GB)</li>
				<li>DDR5-5600 - 64GB (2 x 32GB)</li>
			</ul>
            <div class="detail-label">Storage options</div>
            <ul class="detail-text">
                <li>WW_BLACK™ SN770 NVMe™- M.2 2280 - 250GB</li>
				<li>WW_BLACK™ SN770 NVMe™- M.2 2280 - 500GB</li>
				<li>WW_BLACK™ SN770 NVMe™- M.2 2280 - 1TB</li>
				<li>WW_BLACK™ SN770 NVMe™- M.2 2280 - 2TB</li>
				<li>WW_BLACK™ SN850X NVMe™- M.2 2280 - 1TB</li>
				<li>WW_BLACK™ SN850X NVMe™- M.2 2280 - 2TB</li>
				<li>WW_BLACK™ SN850X NVMe™- M.2 2280 - 4TB</li>
			</ul>
            <div class="detail-label">Graphics</div>
            <ul class="detail-text">
                <li>Radeon™ 700M Graphics</li>
				<li>ENTEL® Iris™ XP</li>
			</ul>
            <div class="detail-label">Display</div>
            <ul class="detail-text">
                <li>13.5” 3:2 2256*1504px</li>
				<li>100% sRGB coverage, 1500:1 contrast, >400 nits brightness</li>
				<li>Available in matte and glossy covers</li>
			</ul>
            <div class="detail-label">Battery</div>
            <ul class="detail-text">
                <li>55Wh</li>
				<li>61Wh</li>
			</ul>
            <div class="detail-label">Operating system</div>
            <ul class="detail-text">
                <li>Michealsoft Door 11 Home</li>
				<li>Michealsoft Door 11 Pro</li>
				<li>DEDSEC ctOS Workstation</li>
				<li>None (bring your own) - Check out our recommended Linux distros</li>
			</ul>
            <div class="detail-label">Display</div>
            <ul class="detail-text">
				<li>13.5” 3:2 2256*1504px</li>
				<li>100% sRGB coverage, 1500:1 contrast, >400 nits brightness</li>
                <li>Available in matte and glossy covers</li>
			</ul>
        </div>
    </div>
    <div class="Line8" style="align-self: stretch; height: 0px; border: 1px black solid"></div>
    <div class="TheBox-container" id="TheBox">
        <div class="TheBox-label">What’s in the box</div>
        <div class="TheBox-detail">
            <img style="align-self: stretch; height: 804px" src="../images/6.png" />
            <ul class="detail-text">
                <li>DEDSEC Laptop DIY Edition</li>
				<li>Input Cover</li>
				<li>Bezel</li>
				<li>Memory (optional)</li>
				<li>Storage (optional)</li>
				<li>WiFi</li>
				<li>Expansion Cards (customizable)</li>
				<li>Power Adapter (optional)</li>
				<li>DEDSEC Screwdriver</li>
			</ul>
        </div>
    </div>
    <div class="Line9" style="align-self: stretch; height: 0px; border: 1px black solid"></div>
    <div class="Reviews-container" id="Reviews">
        <div class="Reviews-label">Reviews</div>
        <div class="Reviews-detail">
            <ul class="detail-text" style="text-decoration: underline;">
                <li>Quick start guide</li>
				<li>Recommend Linux distros</li>
				<li>Factory images</li>
				<li>Safety & Compliance</li>
				<li>User manual</li>
		</ul>
        </div>
    </div>
    <div class="Line9" style="align-self: stretch; height: 0px; border: 1px black solid"></div>
    <div class="Support-container" id="Support">
        <div class="Support-label">Support</div>
        <div class="Support-detail">
            <ul class="detail-text" style="text-decoration: underline;">
                <li>Quick start guide</li>
				<li>Recommend Linux distros</li>
				<li>Factory images</li>
				<li>Safety & Compliance</li>
				<li>User manual</li>
			</ul>
        </div>
    </div>
    </div>
<!--End of Products Detail Admin main -->
<!-------------------------------------------------------------------------------->
<!-- Footer -->
<?php include './components/footer.php';?>
<!-- End of Footer -->
<!-------------------------------------------------------------------------------->
<!-- Import Framework -->
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../scripts/ProductDetailAdmin.js"></script>
<!-- End of importing Framework -->
</body>
</html>
