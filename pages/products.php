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

<!--Product Admin main -->

<div class="products-main">
    <div class="select-soft">

      <ul class="indicator">
        <div class="fs16 fw700">Phân loại</div>
        <div class="line-1-b"></div>
        <li data-filter="all" class="active-1"><a href="#">Tất cả</a></li>
        <li data-filter="điện tử"><a href="#">Đồ điện tử</a></li>
        <li data-filter="quần áo"><a href="#">Quần áo</a></li>
        <li data-filter="vé"><a href="#">Vé sự kiện</a></li>
        <li data-filter="sách"><a href="#">Giáo trình</a></li>
        <li data-filter="vật dụng"><a href="#">Thiết bị gia dụng</a></li>
        <li data-filter="khác"><a href="#">Khác</a></li>
      </ul>
      <div class="filter-condition">
        
        <div class="fs16 fw700" style="margin-top: 20px;">Sắp xếp</div>
        <!-- <span>View As a</span> -->
        <!-- <select name="" id="select">
          <option value="Default">mặc định</option>
          <option value="LowToHigh">giá tăng dần</option>
          <option value="HighToLow">giá giảm dần</option>
        </select> -->
        <div class="line-1-b"></div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
          <label class="form-check-label fs14" for="flexRadioDefault1">
            Mặc định
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
          <label class="form-check-label fs14" for="flexRadioDefault2">
            Giá thấp đến cao
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
          <label class="form-check-label fs14" for="flexRadioDefault3">
            Giá cao đến thấp
          </label>
        </div>
        
      </div> 
    </div>

    <div class="product-field">
      <ul class="products-items">
        <li data-category="" data-price="">
          <a href="product_detail.php"><img src="../images/products/prdlist 1.svg" style="height: 130px; width: 100px; object-fit: cover;" alt=""></a>
          
          <div class="detail">
            <h1 class="fs16 fw700" style="margin-right: 70px;">Sách giáo trình Giải tích 2</h1>

            <tag>sách</tag>
            <span>Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2, mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!</span>
            <div>
              <div class="line-1-b"></div>
              <a href="" class="buyitem nolined">Buy now</a>
            </div>                 
          </div>        
          <h4>48000 đ</h4>
        </li>
        <li data-category="" data-price="">
          <a href="product_detail.php"><img src="../images/products/prdlist 1.svg" style="height: 130px; width: 100px; object-fit: cover;" alt=""></a>
          
          <div class="detail">
            <h1 class="fs16 fw700" style="margin-right: 70px;">Sách giáo trình Giải tích 2</h1>

            <tag>điện tử</tag>
            <span>Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2, mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!</span>
            <div>
              <div class="line-1-b"></div>
              <a href="" class="buyitem nolined">Buy now</a>
            </div>                 
          </div>        
          <h4>48000 đ</h4>
        </li>
        <li data-category="" data-price="">
          <a href="product_detail.php"><img src="../images/products/prdlist 1.svg" style="height: 130px; width: 100px; object-fit: cover;" alt=""></a>
          
          <div class="detail">
            <h1 class="fs16 fw700" style="margin-right: 70px;">Sách giáo trình Giải tích 2</h1>

            <tag>sách</tag>
            <span>Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2, mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!</span>
            <div>
              <div class="line-1-b"></div>
              <a href="" class="buyitem nolined">Buy now</a>
            </div>                 
          </div>        
          <h4>48000 đ</h4>
        </li>
        <li data-category="" data-price="">
          <a href="product_detail.php"><img src="../images/products/prdlist 1.svg" style="height: 130px; width: 100px; object-fit: cover;" alt=""></a>
          
          <div class="detail">
            <h1 class="fs16 fw700" style="margin-right: 70px;">Sách giáo trình Giải tích 2</h1>

            <tag>vật dụng</tag>
            <span>Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2, mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!</span>
            <div>
              <div class="line-1-b"></div>
              <a href="" class="buyitem nolined">Buy now</a>
            </div>                 
          </div>        
          <h4>48000 đ</h4>
        </li>
        <li data-category="" data-price="">
          <a href="product_detail.php"><img src="../images/products/prdlist 1.svg" style="height: 130px; width: 100px; object-fit: cover;" alt=""></a>
          
          <div class="detail">
            <h1 class="fs16 fw700" style="margin-right: 70px;">Sách giáo trình Giải tích 2</h1>

            <tag>sách</tag>
            <span>Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2, mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!</span>
            <div>
              <div class="line-1-b"></div>
              <a href="" class="buyitem nolined">Buy now</a>
            </div>                 
          </div>        
          <h4>48000 đ</h4>
        </li>
        <li data-category="" data-price="">
          <a href="product_detail.php"><img src="../images/products/prdlist 1.svg" style="height: 130px; width: 100px; object-fit: cover;" alt=""></a>
          
          <div class="detail">
            <h1 class="fs16 fw700" style="margin-right: 70px;">Sách giáo trình Giải tích 2</h1>

            <tag>sách</tag>
            <span>Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2, mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!</span>
            <div>
              <div class="line-1-b"></div>
              <a href="" class="buyitem nolined">Buy now</a>
            </div>                 
          </div>        
          <h4>48000 đ</h4>
        </li>
        <li data-category="" data-price="">
          <a href="product_detail.php"><img src="../images/products/prdlist 1.svg" style="height: 130px; width: 100px; object-fit: cover;" alt=""></a>
          
          <div class="detail">
            <h1 class="fs16 fw700" style="margin-right: 70px;">Sách giáo trình Giải tích 2</h1>

            <tag>sách</tag>
            <span>Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2, mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!</span>
            <div>
              <div class="line-1-b"></div>
              <a href="" class="buyitem nolined">Buy now</a>
            </div>                 
          </div>        
          <h4>48000 đ</h4>
        </li>
        <li data-category="" data-price="">
          <a href="product_detail.php"><img src="../images/products/prdlist 1.svg" style="height: 130px; width: 100px; object-fit: cover;" alt=""></a>
          
          <div class="detail">
            <h1 class="fs16 fw700" style="margin-right: 70px;">Sách giáo trình Giải tích 2</h1>

            <tag>vé</tag>
            <span>Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2, mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!</span>
            <div>
              <div class="line-1-b"></div>
              <a href="" class="buyitem nolined">Buy now</a>
            </div>                 
          </div>        
          <h4>48000 đ</h4>
        </li>
        
      </ul>
    </div>

  </div>
<!--End of Product Admin main -->
<!-------------------------------------------------------------------------------->
<!-- Footer -->
<?php include './components/footer.php';?>
<!-- End of Footer -->
<!-------------------------------------------------------------------------------->
<!-- Import Framework -->
<script src="../scripts/bootstrap.bundle.js"></script>
  <script src="../scripts/prdss.js"></script>
<!-- End of importing Framework -->
</body>
</html>