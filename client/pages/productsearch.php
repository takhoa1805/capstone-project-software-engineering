<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tìm kiếm</title>
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
</head>
<body style="font-family: Inconsolata;">

  <!-- header -->
  <?php include './components/header.php';?>
  <!-- end header -->
    <!-- navbar -->
    <?php include './components/navbar.php';?>

<!-- end of navbar -->
  <!-- body -->
  <div class="products-main">
    <!-- <div class="select-soft">

      <ul class="indicator">
        <div class="fs16 fw700">Phân loại</div>
        <div class="line-1-b"></div>
        <li data-filter="all" class="active-1"><a href="#">Tất cả</a></li>
        <li data-filter="điện tử"><a href="#">Đồ điện tử</a></li>
        <li data-filter="quần áo"><a href="#">Quần áo</a></li>
        <li data-filter="sách"><a href="#">Giáo trình</a></li>
        <li data-filter="vật dụng"><a href="#">Thiết bị gia dụng</a></li>
        <li data-filter="khác"><a href="#">Khác</a></li>
      </ul>
      <div class="filter-condition">
        
        <div class="fs14 fw700">sắp xếp</div>
       
        <select name="" id="select">
          <option value="Default">mặc định</option>
          <option value="LowToHigh">giá tăng dần</option>
          <option value="HighToLow">giá giảm dần</option>
        </select>
      </div> 
      <div class="line-1-b"></div>
    </div> -->

    <div class="product-field">
      <ul class="products-items">
        <li data-category="" data-price="">
          <img src="../img/products/prdlist 1.svg" style="height: fit-content;" alt="">
          <div class="detail">
            <h1 class="fs16 fw700" style="margin-right: 70px;">Sách giáo trình Giải tích 2</h1>

            <tag>sách</tag>
            <span>Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2, mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!</span>
            <div>
              <div class="line-1-b"></div>
            <a href="productdetail.html" class="buyitem nolined fcb">Buy now</a>
            </div>                 
          </div>        
          <h4>48000 đ</h4>
        </li>
        <li data-category="" data-price="">
          <img src="../img/products/prdlist 1.svg" style="height: fit-content;" alt="">
          <div class="detail">
            <h1 class="fs16 fw700" style="margin-right: 70px;">Sách giáo trình Giải tích 2</h1>

            <tag>điện tử</tag>
            <span>Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2, mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!</span>
            <div>
              <div class="line-1-b"></div>
            <a href="productdetail.html" class="buyitem nolined fcb">Buy now</a>
            </div>                 
          </div>        
          <h4>48000 đ</h4>
        </li>
        <li data-category="" data-price="">
          <img src="../img/products/prdlist 1.svg" style="height: fit-content;" alt="">
          <div class="detail">
            <h1 class="fs16 fw700" style="margin-right: 70px;">Sách giáo trình Giải tích 2</h1>

            <tag>vật dụng</tag>
            <span>Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2, mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!</span>
            <div>
              <div class="line-1-b"></div>
            <a href="productdetail.html" class="buyitem nolined fcb">Buy now</a>
            </div>                 
          </div>        
          <h4>48000 đ</h4>
        </li>
        <li data-category="" data-price="">
          <img src="../img/products/prdlist 1.svg" style="height: fit-content;" alt="">
          <div class="detail">
            <h1 class="fs16 fw700" style="margin-right: 70px;">Sách giáo trình Giải tích 2</h1>

            <tag>sách</tag>
            <span>Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2, mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!</span>
            <div>
              <div class="line-1-b"></div>
            <a href="productdetail.html" class="buyitem nolined fcb">Buy now</a>
            </div>                 
          </div>        
          <h4>48000 đ</h4>
        </li>
        <li data-category="" data-price="">
          <img src="../img/products/prdlist 1.svg" style="height: fit-content;" alt="">
          <div class="detail">
            <h1 class="fs16 fw700" style="margin-right: 70px;">Sách giáo trình Giải tích 2</h1>

            <tag>quần áo</tag>
            <span>Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2, mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!</span>
            <div>
              <div class="line-1-b"></div>
            <a href="productdetail.html" class="buyitem nolined fcb">Buy now</a>
            </div>                 
          </div>        
          <h4>48000 đ</h4>
        </li>
        <li data-category="" data-price="">
          <img src="../img/products/prdlist 1.svg" style="height: fit-content;" alt="">
          <div class="detail">
            <h1 class="fs16 fw700" style="margin-right: 70px;">Sách giáo trình Giải tích 2</h1>

            <tag>sách</tag>
            <span>Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2, mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!</span>
            <div>
              <div class="line-1-b"></div>
            <a href="productdetail.html" class="buyitem nolined fcb">Buy now</a>
            </div>                 
          </div>        
          <h4>48000 đ</h4>
        </li>
        
      </ul>
    </div>

  </div>



<!-- Footer -->
<?php include './components/footer.php';?>
<!-- End of Footer -->
<!-------------------------------------------------------------------------------->

  <script src="../js/bootstrap.bundle.js"></script>

  <!-- Header Logic -->
<script type="text/javascript" src="../scripts/component/header.js"></script>
  <script src="../js/bootstrap.bundle.js"></script>
  <script src="../js/huy.js"></script>

  
</body>
</html>

