<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>báo</title>
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

  <div class="newspaper intro" style="gap: 12px;">
    <a class="nolined" style="display: flex; flex-wrap: nowrap; align-items: center; gap: 5px;" href="./newspapes.php">
      <img src="../images/icon/prevbutton.svg" alt="">
      <i class="fcb fs14 nolined">Quay lại</i>
    </a> 
    <img src="../images/news/new item1.svg" style="width: 100%; min-height: 250px; max-height: 550px; object-fit: cover;" alt="">
    <h3 style="height: 30px; ">Phone news</h3>
    <div class="fs14 fw400">Posted 2022/10/20</div>
    <div class="fs16 fw400" style="display: flex; flex-direction: column; gap: 20px;">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales dolor quis diam volutpat, et fermentum mauris maximus. Phasellus a cursus justo, vel vulputate diam. Cras posuere, elit id commodo consequat, eros ligula mattis justo, vitae maximus libero quam eu massa. Fusce vel vehicula nisi, eu convallis nibh. Mauris rutrum in dui a aliquet. Vestibulum eros lacus, pretium sit amet nisl ac, laoreet tempor diam. Quisque tellus tortor, consequat vel est in, eleifend eleifend tortor. Praesent lorem neque, auctor eget condimentum sit amet, posuere eget neque.
      <br>
      <br>
      Aenean sodales sodales lacus scelerisque hendrerit. In volutpat, dui sed interdum ultricies, sapien eros tincidunt sapien, nec accumsan lectus nunc eget nisi. Ut arcu metus, molestie et sodales a, tempor accumsan eros. Etiam quis ex tempor, volutpat sapien at, gravida sem. Nam posuere mollis laoreet. Duis non gravida risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut consectetur mauris augue, in viverra augue laoreet at.
      <br>
      <br>
      Vestibulum viverra faucibus nisi. Donec sed rutrum ipsum. Duis a mollis purus, eu pretium magna. Proin blandit eleifend lacus. Quisque tellus dolor, convallis at nisl in, varius dapibus nibh. Vestibulum eu mauris luctus, ullamcorper justo aliquam, porttitor augue. Vivamus sem nulla, condimentum eget urna sed, lacinia finibus lectus. Duis ac commodo risus, nec scelerisque velit. Maecenas sollicitudin dui ac pulvinar posuere. Nulla finibus malesuada ex. Nunc pharetra posuere tellus, id consectetur turpis bibendum sit amet. Morbi ornare felis nec leo vestibulum volutpat. Fusce vel ante varius, finibus ipsum non, lobortis enim. Aenean nec consequat velit, nec gravida metus. Duis in lorem sit amet nunc rhoncus consectetur a at leo.</div>
  </div>
<!-- Footer -->
<?php include './components/footer.php';?>
<!-- End of Footer -->
<!-------------------------------------------------------------------------------->
<script src="../scripts/bootstrap.bundle.js"></script>

  
</body>
</html>

