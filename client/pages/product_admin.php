<!DOCTYPE html>
<html>
<head>
	<meta lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, , initial-scale=1, user-scalable=no">
	<title>Product Admin</title>
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
    <div class="container Maincontainer">
    <div class="MainPage">
        <div class="Left-Nav-bar">
            <div class="Sidebar">
                <div style="align-self: stretch;">
                    <div class="Category">
						<div class="Sidebar-header">Phân loại</div>
						<div class="Line5" style="align-self: stretch; height: 0px; border: 1px black solid"></div>
                        <nav class="navbar" style="display: flex; flex-direction: column; align-items: flex-start;">
							<a class="navbar-brand Sidebar-selection" href="#">Tất cả</a>
							<a class="navbar-brand Sidebar-selection" href="#">Đồ điện tử</a>
							<a class="navbar-brand Sidebar-selection" href="#">Quần áo</a>
							<a class="navbar-brand Sidebar-selection" href="#">Vé sự kiện</a>
							<a class="navbar-brand Sidebar-selection" href="#">Giáo trình</a>
							<a class="navbar-brand Sidebar-selection" href="#">Thiết bị gia dụng</a>
							<a class="navbar-brand Sidebar-selection" href="#">Khác</a>
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
            <button type="button" class="btn btn-danger btn-sm">
				<span class="Text">Yêu cầu chờ xét duyệt</span></a>
			</button>
            <div class="Results">20 results</div>
            <div class="List-detail">
                <div class="ListingElement-container">
                    <div class="ListingElement">
                        <img style="width: 99px; height: 130px" src="../images/book.png" />
                        <div class="ListingElement-detail">
                            <div class="Element-detail">
								<div class="Element-header">
								  <div class="header-price">Sách giáo trình Giải tích 2</div>
								  <div class="header-price" style="width: 70px; text-align: right;">0đ</div>
								</div>
								<div class="detail-info">Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2,
									mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!
								</div>
							</div>
							<button type="button" class="btn btn-danger btn-sm" style="place-self: end;">Gỡ bỏ</button>
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
								<div class="detail-info">Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2,
									mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!
								</div>
							</div>
							<button type="button" class="btn btn-danger btn-sm" style="place-self: end;">Gỡ bỏ</button>
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
								<div class="detail-info">Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2,
									mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!
								</div>
							</div>
							<button type="button" class="btn btn-danger btn-sm" style="place-self: end;">Gỡ bỏ</button>
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
								<div class="detail-info">Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2,
									mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!
								</div>
							</div>
							<button type="button" class="btn btn-danger btn-sm" style="place-self: end;">Gỡ bỏ</button>
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
								<div class="detail-info">Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2,
									mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!
								</div>
							</div>
							<button type="button" class="btn btn-danger btn-sm" style="place-self: end;">Gỡ bỏ</button>
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
								<div class="detail-info">Trong niềm vui hoan hỉ sau khi đã qua môn Giải tích 2,
									mình xin gửi tặng cuốn giáo trình này cho các bạn có nhu cầu. Chúc các bạn học tốt!
								</div>
							</div>
							<button type="button" class="btn btn-danger btn-sm" style="place-self: end;">Gỡ bỏ</button>
                        </div>
                    </div>
                    <div style="align-self: stretch; height: 0px; border: 1px black solid"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
<!--End of Product Admin main -->
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
</body>
</html>