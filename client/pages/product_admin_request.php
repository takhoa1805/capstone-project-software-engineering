<!DOCTYPE html>
<html>
<head>
	<meta lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, , initial-scale=1, user-scalable=no">
	<title>Product Admin Required List</title>
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
	<link rel="stylesheet" type="text/css" href="../css/ProductAdmin(ReqList).css">
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
<!--Product Admin Required List main -->
<div class="container Maincontainer">
    <div class="MainPage">
      <div style="color: black; font-size: 36px; font-family: Inconsolata; font-weight: 700; line-height: 54px; word-wrap: break-word">Yêu cầu chờ xét duyệt</div>
      <div class="Element-List">
        <div class="Sell-Require" style="margin:5px">
          <div class="header-text">Yêu cầu đăng bán</div>
          <div class="Product-list" id="upload-requests-container">
          </div>
        </div>


        <div class="Cancel-Require" style="margin: 5px">
          <div class="header-text">Yêu cầu gỡ bỏ sản phẩm</div>
          <div class="Product-list" id="remove-requests-container">
          </div>
        </div>


        <div class="Complain-Exchange" style="margin:5px">
        <div class="Complain-Exchange">
          <div class="header-text">Khiếu nại sản phẩm, yêu cầu đổi/trả</div>
          <div class="Product-list">
            <div class="ListingElement-container">
              <div class="ListingElement">
                <img style="width: 99px; height: 130px" src="../images/book.png" />
                <div class="ListingElement-detail">
                  <div class="Element-detail">
                    <div class="Element-header">
                      <div class="header-price">Sách giáo trình Giải tích 2</div>
                      <div class="header-price" style="width: 70px; text-align: right;">0đ</div>
                    </div>
                    <ul>
                      <li class="detail-info">Ngày gửi yêu cầu: 11/11/2023</li>
                      <li class="detail-info">Lý do: sách bị vẽ bậy, rách nát, sai với tình trạng mô tả</li>
                    </ul>
                  </div>
                  <button type="button" class="btn btn-primary btn-sm" style="place-self: end;">
                    <div class="Text">Duyệt</div>
                  </button>
                </div>
              </div>
              <div style="align-self: stretch; height: 0px; border: 1px black solid"></div>
            </div>
            <div class="ListingElement-container">
              <div class="ListingElement">
                <img style="width: 99px; height: 130px" src="../images/book.png" />
                <div class="ListingElement-detail">
                  <div class="Element-detail">
                    <div class="Element-header">
                      <div class="header-price">Sách giáo trình Giải tích 2</div>
                      <div class="header-price" style="width: 70px; text-align: right;">0đ</div>
                    </div>
                    <ul>
                      <li class="detail-info">Ngày gửi yêu cầu: 11/11/2023</li>
                      <li class="detail-info">Lý do: Không có nhu cầu mua nữa</li>
                    </ul>
                  </div>
                  <button type="button" class="btn btn-primary btn-sm" style="place-self: end;">
                    <div class="Text">Duyệt</div>
                  </button>
                </div>
              </div>
              <div style="align-self: stretch; height: 0px; border: 1px black solid"></div>
            </div>
          </div>
        </div>
      </div>
      </div>



    </div>
  </div>
</div>

<!--End of Product Admin Required List main -->
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
<!-- Requests Logic -->
<script type="text/javascript" src="../scripts/admin_requests.js"></script>
<!-- Navigate to product detail Logic -->
<script type="text/javascript" src="../scripts/product_navigator_admin.js"></script>
</body>
</html>