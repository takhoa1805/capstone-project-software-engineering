<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giới thiệu</title>
   <!-- Google Font API -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700;900&display=swap" rel="stylesheet">
<!-- Import Framework -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<!-- End of importing Framework -->
   <!-- style -->
  <!-- Import custom style -->
  <link rel="stylesheet" href="../css/styleshuy.css">
  <link rel="stylesheet" href="../css/ProductDetailAdmin.css">
  <link rel="stylesheet" href="../css/header_footer.css">
  <link rel="stylesheet" type="text/css" href="../css/styleGlobal.css">
<!-- End of importing custom style -->
</head>
<body>
  <!-- header -->
    <?php include './components/header.php';?>
  <!-- end header -->
  <!-- navbar -->
  <?php include './components/navbar.php';?>
  <!-- end of navbar -->
<!--Product Details Admin main -->
<div class="productdetail-head">
    
    <a class="nolined" style="display: flex; flex-wrap: nowrap; align-items: center; gap: 5px;" href="./products.php">
      <img src="../images/icon/prevbutton.svg" alt="">
      <i class="fcb fs14 nolined">Quay lại danh mục sản phẩm</i>
    </a>   
  
  <div class="productdetail-head-c">

      <div class="product-header">
          <div class="product-Name">DEDSEC Laptop 13 (DMA Ryzen™ 7040 Series)</div>
          <div class="product-Price">$2,499.00</div>
      </div>
      <a href="product_detail.php" class="button-nho fs14 fw400">Thêm vào giỏ hàng
        <img src="../images/icon/right-arrow.svg" alt="">
      </a>
    </div> 
  </div>
    <!--Slide-->
  
  <div class="banner-p">
    <div class="banner-carousel-p">
      <div class=" banner-carousel-container-p " id="carouselContainer">
        <div class="banner-carousel-item-p">
          <img src="../images/products/1.png" alt="...">
        </div>
        <div class="banner-carousel-item-p">
          <img src="../images/products/2.png" alt="...">
        </div>
        <div class="banner-carousel-item-p">
          <img src="../images/products/image 2.svg" alt="...">
        </div>
        <div class="banner-carousel-item-p">
          <img src="../images/products/image 1.svg" alt="...">
      </div>
        <!-- Add more items as needed -->
      </div>
    </div>
  </div>
  <div class="banner-btn" style="margin-top: 15px;">
    <button id="prevBtn">
      <img src="../images/icon/prevbutton.svg" alt="" style="width: 15px;height: 20px">
    </button>
  
    <ul class="banner-dot">
      <li class="active"></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  
    <button id="nextBtn">
      <img src="../images/icon/nextbutton.svg" alt="" style="width: 15px; height: 20px">
    </button>
  </div> 
      
    <!--End Slide-->
	<!--Nav bar-->
  <div class="productdetail-body">
    <div class="" style="width: 100%; display: flex; flex-direction: column;">
    <div class="line-1-b"></div>
        <nav class="navbar">
      <div class="container-fluid justify-content-center">
        <a class="navbar-brand px-4 detail-label fs-5" href="#tongquan">Overview</a>
        <a class="navbar-brand px-4 detail-label fs-5" href="#mota">specs</a>
        <a class="navbar-brand px-4 detail-label fs-5" href="#img">What's in the box</a>
        <a class="navbar-brand px-4 detail-label fs-5" href="#tinhtrang">Reviews</a>
        <a class="navbar-brand px-4 detail-label fs-5" href="#nguoiban">Support</a>
      </div>
    </nav>
    <div class="line-1-b"></div>
    </div>
    <!--End Nav bar-->
   
    <div class="productdetail-container" id="tongquan">
        <div class="productdetail-label">Overview</div>
        <div class="Overview-detail">
          <div class="detail-1">
            <img src="../images/products/overview1.png" >
            <div>
              <span class="detail-label">Truly personal computing<br /></span>
              <span class="detail-text">
                The DEDSEC Laptop 13 has an extremely modular design that gives you full control. Order the DIY
                Edition and build it yourself, or choose pre-built to have a system ready to go out of the box.
                Replace any part, upgrade key components, and customize like never before.
              </span>
            </div>
        </div>
        <div class="detail-1">
            <div>
              <span class="detail-label">Expansion Cards<br /></span>
              <span class="detail-text">
                External adapters are a thing of the past. The Framework Expansion Card system lets you choose exactly                the ports you want and where you want them. With four bays, you can select from USB-C, USB-A,
                HDMI, DisplayPort, MicroSD, Ethernet, Audio, ultra fast storage, and more.
              </span>
            </div>
            <img src="../images/products/overview2.png">
        </div>
        <div class="detail-1" style="flex-direction: column;">            
            <img src="../images/products/overview3.png" >
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
    <div class="Line8" style="align-self: stretch; height: 0px; border: 1px black solid"></div>
    <div class="productdetail-container" id="mota">
        <div class="productdetail-label">Mô tả sản phẩm</div>
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
    <div class="productdetail-container" id="img">
        <div class="productdetail-label">What's is the box</div>
        <div class="TheBox-detail">
            <img style="align-self: stretch; width: 100%; " src="../images/products/product1.png" />
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
    <div class="productdetail-container" id="tinhtrang">
        <div class="productdetail-label">Reviews</div>
        <div class="Reviews-detail">
            <ul class="detail-text" style="text-decoration: underline;">
               
              <li>Có trầy xước</li>
              <li>Máy nữ dùng kỹ</li>
              <li>Cam kết không vào nước </li>
              <li>Vệ sinh bảo dưỡng định kỳ hằng năm</li>
            </ul>
        </div>
    </div>
    <div class="Line9" style="align-self: stretch; height: 0px; border: 1px black solid"></div>
    <div class="productdetail-container" id="nguoiban">
        <div class="productdetail-label">Support</div>
        <div class="Support-detail">
        <ul class="detail-text" style="text-decoration: underline;">
                         
          <li>Người dùng: John Doe</li>
          <li>Email: JohnDoe@hcmut.edu.vn</li>
          <li>Số điện thoại: 0123456789</li>
          <li>Khoa: Đã ra trường</li>
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
<script src="../scripts/bootstrap.bundle.js"></script>
    <script src="../scripts/carouselprd.js"></script>
    
<!-- End of importing Framework -->
</body>
</html>
