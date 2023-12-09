<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Help</title>
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
  <div class="help">
    <ul>Câu hỏi thường gặp:
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" style="font-size: 24px;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              Tôi có thể làm gì ở đây
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
            <div class="accordion-body">
              BKPEE là một sàn thương mại điện tử được tạo dựng với mục đích giúp các sinh viên Trường Đại học Bách Khoa tự do mua bán, trao đổi đồ dùng và vật dụng, bạn có thể đăng bán sản phẩm hoặc mua các sản phẩm <a href="product_detail.php" style="text-decoration: none;">
                  <h1 class="fs24" style="display: inline; margin: 0;">tại đây.</h1>
              </a>

            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" style="font-size: 24px;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
              Tôi có thể làm như thế nào
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
            <div class="accordion-body">
              Bạn có thể mua đồ tại mục sản phẩm, bạn có thể lọc, tìm kiếm sản phẩm và sắp xếp chúng theo mức giá. Hoặc là bạn có thể về lại <a href="product_detail.php" style="text-decoration: none;">
                  <h1 class="fs24" style="display: inline; margin: 0;">trang chủ</h1>
              </a> để xem các bài báo và những tin tức nóng hổi.

            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" style="font-size: 24px;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
              Thầy sẽ cho nhóm em mấy điểm
            </button>
          </h2>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
            <div class="accordion-body">
              Tất nhiên là 10 rồi!

            </div>
          </div>
        </div>

      </div>
    </ul>
  </div>
<!-- Footer -->
<?php include './components/footer.php';?>
<!-- End of Footer -->
<!-------------------------------------------------------------------------------->
  <script src="../scripts/bootstrap.bundle.js"></script>

  
</body>
</html>

