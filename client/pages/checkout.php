<!DOCTYPE html>
<html>

<head>
    <meta lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, , initial-scale=1, user-scalable=no">
    <title>Checkout</title>
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
    <link rel="stylesheet" type="text/css" href="../css/Checkout.css">
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
    <!--Checkout main -->
    <div class="container Maincontainer">
      <div class="MainPage">
        <div class="Text">Hoàn tất thủ tục thanh toán</div>
        <form class="row-cols-xxl-auto needs-validation Payment-form" novalidate>
          <div class="col-auto Payment-form-input">
            <div class="information">
              <div class="Text" style="font-size: 24px;font-weight: 700;">Thông tin cá nhân</div>
              <div class="col-md-10">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail">
              </div>
              <div class="col-md-10">
                <label for="Nameinput" class="form-label">Name</label>
                <input type="text" class="form-control" id="Nameinput" placeholder="Tên của bạn" required>
                <div class="valid-feedback">Tên hợp lệ!</div>
              </div>
              <div class="col-md-10">
                <label for="chooseCountry" class="form-label">Country</label>
                <select class="form-select" id="chooseCountry" required>
                  <option selected disabled value="">Choose...</option>
                  <option>Korea</option>
                  <option>Japan</option>
                  <option>Viet Nam</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid Country.
                </div>
              </div>
              <div class="col-md-10">
                <label for="chooseState" class="form-label">State/Province</label>
                <select class="form-select" id="chooseState" required>
                  <option selected disabled value="">Choose...</option>
                  <option>option1</option>
                  <option>option2</option>
                  <option>option3</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state/Province.
                </div>
              </div>
              <div class="col-md-10">
                <label for="chooseCity" class="form-label">CIty</label>
                <select class="form-select" id="chooseCity" required>
                  <option selected disabled value="">Choose...</option>
                  <option>option1</option>
                  <option>option2</option>
                  <option>option3</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid CIty.
                </div>
              </div>
              <div class="col-md-10">
                <label for="ZipCodeinput" class="form-label">Zip Code</label>
                <input type="text" class="form-control" id="ZipCodeinput" required>
                <div class="invalid-feedback">
                  Please provide a valid zip code.
                </div>
              </div>
              <div class="col-md-10">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" required>
                <div class="invalid-feedback">
                  Please provide a valid Address.
                </div>
              </div>
              <div class="col-md-10">
                <label for="inputPhone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="inputPhone" required>
                <div class="invalid-feedback">
                  Please provide a valid Phone Number.
                </div>
              </div>
            </div>
            <div class="Payment-method">
              <div class="Text" style="font-size: 24px;font-weight: 700;">Phương thức thanh toán</div>
              <div class="form-check row w-100 g-3">
                <div>
                  <input type="radio" class="form-check-input" id="paycheck1" name="radio-stacked" required>
                  <label class="form-check-label" for="paycheck1">Credit card / Debit card</label>
                  <div class="invalid-feedback">Vui lòng chọn phương thức thanh toán</div>
                </div>
                <img style="width: auto;" src="../images/creditcard.png" alt="">
                <div class="col-md-10">
                  <label for="CardName" class="form-label">Name on card</label>
                  <input type="text" class="form-control" id="CardName" placeholder="placeholder text" required>
                  <div class="invalid-feedback">Tên không hợp lệ!</div>
                </div>
                <div class="col-md-10">
                  <label for="CardNumber" class="form-label">Card number</label>
                  <input type="text" class="form-control" id="CardNumber" placeholder="placeholder text" required>
                  <div class="invalid-feedback">STK không hợp lệ!</div>
                </div>
                <div class="col-md-10">
                  <label for="ExDay" class="form-label">Expiration date</label>
                  <input type="text" class="form-control" id="ExDay" placeholder="placeholder text" required>
                  <div class="invalid-feedback">Ngày không hợp lệ!</div>
                </div>
                <div class="col-md-10">
                  <label for="CVV" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="CVV" placeholder="placeholder text" required>
                  <div class="invalid-feedback">CVV không hợp lệ!</div>
                </div>
              </div>
              <div class="form-check row w-100 g-3">
                <div>
                  <input type="radio" class="form-check-input" id="paycheck2" name="radio-stacked" required>
                  <label class="form-check-label" for="paycheck2">PayPal</label>
                  <div class="invalid-feedback">Vui lòng chọn phương thức thanh toán</div>
                </div>
                <img style="width: auto;" src="../images/paypal.png" alt="">
              </div>
              <div class="form-check row w-100 g-3">
                <div>
                  <input type="radio" class="form-check-input" id="paycheck3" name="radio-stacked" required>
                  <label class="form-check-label" for="paycheck3">Google Pay</label>
                  <div class="invalid-feedback">Vui lòng chọn phương thức thanh toán</div>
                </div>
                <img style="width: auto;" src="../images/ggpay.png" alt="">
              </div>
            </div>
          </div>
          <div class="Orderform">
            <div class="OrderSummary">
              <div class="OrderDetail">
                <div class="Product">
                  <div class="Text" style="font-size: 16px;">Chi tiết đơn hàng</div>
                  <div class="Product-detail">
                    <img style="width: 60px; height: 60px; border-radius: 5px" src="../images/cart_product.png" />
                    <div class="detail-frame">
                      <div class="Text" style="font-size: 16px;">DEDSEC Laptop 13 (DMA Ryzen™ 7040 Series)</div>
                      <div class="Text" style="text-align: right;font-size: 16px;">150,000,000đ</div>
                    </div>
                  </div>
                  <div class="Product-detail">
                    <img style="width: 60px; height: 60px; border-radius: 5px" src="../images/book.png" />
                    <div class="detail-frame">
                      <div class="Text" style="font-size: 16px;">Sách giáo trình Giải tích 2</div>
                      <div class="Text" style="text-align: right;font-size: 16px;">0đ</div>
                    </div>
                  </div>
                </div>
                <div style="width: 353px; height: 0px; border: 1px black solid"></div>
                <div class="cost-list">
                  <div class="element">
                    <div class="Text" style="font-size: 14px;font-weight: 400;">Tạm tính</div>
                    <div class="Text" style="font-size: 14px;font-weight: 400;">$7,497.00</div>
                  </div>
                  <div class="element">
                    <div class="Text" style="font-size: 14px;font-weight: 400;">Chi phí khác</div>
                    <div class="Text" style="font-size: 14px;font-weight: 400;">0đ</div>
                  </div>
                </div>
                <div style="width: 353px; height: 0px; border: 1px black solid"></div>
                <div class="cost-total">
                  <div class="element">
                    <div class="Text" style="font-size: 16px;">Tổng cộng</div>
                    <div class="Text" style="font-size: 16px;">$7,497.00</div>
                  </div>
                  <div class="element">
                    <div class="Text" style="font-size: 12px;font-weight: 400;">
                      Vui lòng kiểm tra kỹ đơn hàng của bạn, sau khi đã xác nhận thì đơn hàng sẽ không thể sửa đổi
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-grid gap-2 w-100">
              <button class="btn btn-primary" type="submit" style="display: flex; align-items: center; gap: 10px; justify-content: center;">
                <div>Đặt hàng</div>
                <i class="bi bi-arrow-right-short"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!--End of Checkout main -->
    <!-------------------------------------------------------------------------------->
<!-- Footer -->
<?php include './components/footer.php';?>
<!-- End of Footer -->
<!-------------------------------------------------------------------------------->

    <!-- Import Framework -->
    <script type="text/javascript" src="../css/bootstrap/js/bootstrap.bundle.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        'use strict'
  
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
  
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }
  
              form.classList.add('was-validated')
            }, false)
          })
      })()
    </script>
    <!-- End of importing Framework -->
    <!-- Header Logic -->
<script type="text/javascript" src="../scripts/component/header.js"></script>
</body>

</html>