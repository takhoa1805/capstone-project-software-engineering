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

            <div class="Payment-method">
              <div class="Text" style="font-size: 24px;font-weight: 700;">Phương thức thanh toán</div>
              <div class="form-check row w-100 g-3">
                <div>
                  <input type="radio" class="form-check-input" id="paycheck1" name="radio-stacked" >
                  <label class="form-check-label" for="paycheck1">Credit card / Debit card</label>
                  <div class="invalid-feedback">Vui lòng chọn phương thức thanh toán</div>
                </div>
                <img style="width: auto;" src="../images/creditcard.png" alt="">
                <div class="col-md-10">
                  <label for="CardName" class="form-label">Name on card</label>
                  <input type="text" class="form-control" id="CardName" placeholder="placeholder text" >
                  <div class="invalid-feedback">Tên không hợp lệ!</div>
                </div>
                <div class="col-md-10">
                  <label for="CardNumber" class="form-label">Card number</label>
                  <input type="text" class="form-control" id="CardNumber" placeholder="placeholder text" >
                  <div class="invalid-feedback">STK không hợp lệ!</div>
                </div>
                <div class="col-md-10">
                  <label for="ExDay" class="form-label">Expiration date</label>
                  <input type="text" class="form-control" id="ExDay" placeholder="placeholder text" >
                  <div class="invalid-feedback">Ngày không hợp lệ!</div>
                </div>
                <div class="col-md-10">
                  <label for="CVV" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="CVV" placeholder="placeholder text" >
                  <div class="invalid-feedback">CVV không hợp lệ!</div>
                </div>
              </div>
              <div class="form-check row w-100 g-3">
                <div>
                  <input type="radio" class="form-check-input" id="paycheck2" name="radio-stacked" >
                  <label class="form-check-label" for="paycheck2">PayPal</label>
                  <div class="invalid-feedback">Vui lòng chọn phương thức thanh toán</div>
                </div>
                <img style="width: auto;" src="../images/paypal.png" alt="">
              </div>
              <div class="form-check row w-100 g-3">
                <div>
                  <input type="radio" class="form-check-input" id="paycheck3" name="radio-stacked" >
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
                <div class="Product"id='product-container'>
                  <!-- PRODUCT LOADER -->
                  <div class="Text" style="font-size: 16px;" >Chi tiết đơn hàng</div>



                  <!-- END OF PRODUCT LOADER -->
                </div>
                <div style="width: 353px; height: 0px; border: 1px black solid"></div>
                <div class="cost-list">
                  <div class="element">
                    <div class="Text" style="font-size: 14px;font-weight: 400;" >Tạm tính</div>
                    <div class="Text" style="font-size: 14px;font-weight: 400;"id='total-cost'></div>
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
                    <div class="Text" style="font-size: 16px;"id="final-cost"></div>
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
              <button class="btn btn-primary" type="button" style="display: flex; align-items: center; gap: 10px; justify-content: center;" id='order-button'>
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
    <!-- checkout Logic -->
    <script type="text/javascript" src="../scripts/checkout.js"></script>
</body>

</html>