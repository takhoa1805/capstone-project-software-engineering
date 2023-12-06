<!DOCTYPE html>
<html>
  <head>
    <meta lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, , initial-scale=1, user-scalable=no">
    <title>Account</title>
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
    <link rel="stylesheet" type="text/css" href="../css/account.css">
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

<!--Account main-->
  <div class="container mainContainer">
  <div class="MyAccount-container">
    <div class="account-label">
      <div class="account-label-name">Tài khoản của tôi</div>
      <div class="change-button-container">
        <button class="change-button" id='change-button'>
          <div class="change-button-text-container">
            <div class="change-button-text">Chỉnh sửa</div>
          </div>
        </button>
      </div>
    </div>
    <div class="account-information-container">
      <div class="account-information-label">Thông tin tài khoản</div>
      <div class="AccountInfo-container">
        <div class="AccountInfo-frame1">
          <div class="AccountInfo-frame2">
            <div class="Field">
              <div class="LabelIcon">
                <div class="Label">
                  <div class="Text">Email</div>
                </div>
              </div>
              <div class="FormText" id = "">
                <input type="text" class="form-control" id="user-email" placeholder="">
              </div>
            </div>
            <div class="Field">
              <div class="LabelIcon">
                <div class="Label">
                  <div class="Text">Name</div>
                </div>
              </div>
              <div class="FormText">
                <input type="text" class="form-control" id="user-name" placeholder="">
              </div>
            </div>
            <div class="Dropdown">
              <div class="LabelIcon">
                <div class="Label">
                  <div class="Text">Country</div>
                </div>
              </div>
              <div class="Dropdown">
                <select class="form-select" aria-label="choose-country" id='country-choices'>
                  <option selected>Choose a country</option>
                  <option value="1">Viet Nam</option>
                  <option value="2">Canada</option>
                  <option value="3">Korea</option>
                </select>
              </div>
            </div>
            <div class="Field">
              <div class="LabelIcon">
                <div class="Label">
                  <div class="Text">City</div>
                </div>
              </div>
              <div class="FormText">
                <input type="text" class="form-control" id="user-city" placeholder="">
              </div>
            </div>
            <div class="Field">
              <div class="LabelIcon">
                <div class="Label">
                  <div class="Text">Street</div>
                </div>
              </div>
              <div class="FormText">
                <input type="text" class="form-control" id="user-street" placeholder="">
              </div>
            </div>
            <div class="Field">
              <div class="LabelIcon">
                <div class="Label">
                  <div class="Text">Phone number</div>
                </div>
              </div>
              <div class="FormText">
                <input type="text" class="form-control" id="user-phone" placeholder="+555-2323-2333">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="Line6" style="align-self: stretch; height: 0px; border: 1px black solid"></div>
    <div class="Password-container">
      <div style="width: 200px; color: black; font-size: 24px; font-family: Inconsolata; font-weight: 700; word-wrap: break-word">Password</div>
      <div class="Password-info">
        <button type="button" class="btn btn-secondary" id='password-change-button'>Lưu thay đổi mật khẩu</button>
        <div class="Field">
          <div class="LabelIcon">
            <div class="Label">
              <div class="Text">Old password</div>
            </div>
          </div>
          <div class="FormText">
            <input type="password" class="form-control" id="Password-container">
          </div>
        </div>
        <div class="Field">
          <div class="LabelIcon">
            <div class="Label">
              <div class="Text">New password</div>
            </div>
          </div>
          <div class="FormText">
            <input type="password" class="form-control" id="Password-container">
          </div>
        </div>
      </div>
    </div>
    <div style="justify-content: flex-start; align-items: flex-start; gap: 20px; display: inline-flex">
      <button type="button" class="btn btn-primary" id='save-changes-button'>Lưu thay đổi</button>
      <button type="button" class="btn btn-secondary" id='cancel-button'>Hủy</button>
    </div>
  </div>
  <div class="Line8" style="align-self: stretch; height: 0px; border: 1px black solid"></div>
  <div class="Product-SellRequest">
    <div style="color: black; font-size: 36px; font-family: Inconsolata; font-weight: 700; line-height: 54px; word-wrap: break-word">Gửi yêu cầu đăng bán sản phẩm</div>
    <div class="AccountInfo">
      <div class="Frame96">
        <div class="Frame95" style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: inline-flex">
          <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Tên sản phẩm</label>
              <input type="text" class="form-control" placeholder="" id= 'product-name'>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Giá đề xuất </label>
              <input type="text" class="form-control" placeholder="" id= 'product-price'>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Số lượng</label>
              <input type="number" class="form-control" placeholder="" id ='product-quantity'>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Giới thiệu tổng quan về sản phẩm</label>
              <textarea class="form-control" rows="3" id='product-introduction'></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Mô tả chi tiết sản phẩm</label>
              <textarea class="form-control" rows="3" id='product-specification'></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Mô tả tình trạng sản phẩm</label>
              <textarea class="form-control" rows="3" id='product-status'></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Lý do bán</label>
              <textarea class="form-control" rows="3" id='product-reason-for-sale'></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Lưu ý khác</label>
              <textarea class="form-control" rows="3" id='product-note'></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Hình ảnh thực tế, URL cách nhau bởi dấu phẩy.</label>
              <input type="text" class="form-control" placeholder="" id='product-images'>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Phân loại sản phẩm</label>
              <select class="form-control" id='product-type'>
                <option value='else'>Khác</option>
                <option value='electronics'>Đồ điện tử</option>
                <option value='clothes'>Quần áo</option>
                <option value='tickets'>Vé sự kiện</option>
                <option value ='books'>Giáo trình</option>
                <option value='households'>Thiết bị gia dụng</option>

              </select>
            </div>
          </form>
          <button type="button" class="btn btn-primary" id='send-selling-request'>Gửi yêu cầu</button>
        </div>
      </div>
    </div>
  </div>
  <div class="Line9" style="align-self: stretch; height: 0px; border: 1px black solid"></div>

  <!-- BUY ORDER LIST -->
  <div class="BuyOrder-container" id='buy-order-container'>
    <div style="color: black; font-size: 36px; font-family: Inconsolata; font-weight: 700; line-height: 54px; word-wrap: break-word">Đơn mua</div>

  </div>
  <!-- END OF BUY ORDER LIST -->


  <div class="Line10" style="align-self: stretch; height: 0px; border: 1px black solid"></div>

  <!-- SELL ORDER LIST -->
  <div class="SellOrder-container" id='sell-order-container'>
    <div style="color: black; font-size: 36px; font-family: Inconsolata; font-weight: 700; line-height: 54px; word-wrap: break-word">Đơn bán</div>
    

  </div>
  </div>
  <!-- END OF SELL ORDER LIST -->

<!--End of Account main-->      
<!-- Footer -->
<?php include './components/footer.php';?>
<!-- End of Footer -->
<!-------------------------------------------------------------------------------->
<!-- Import Framework -->
<script type="text/javascript" src="../css/bootstrap/js/bootstrap.bundle.js"></script>
<!-- End of importing Framework -->
  <!-- Get account information -->
  <script type ="text/javascript" src ="../scripts/account_info.js"></script>
<!-- Header Logic -->
<script type="text/javascript" src="../scripts/component/header.js"></script>
  <!-- Navigate to product detail -->
  <script type="text/javascript" src="../scripts/product_navigator.js"></script>
</body>
</html>
