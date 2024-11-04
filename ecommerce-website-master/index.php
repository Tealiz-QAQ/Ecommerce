<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baker's Mart | Online Shopping</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/your/bootstrap.css">
    <link rel="stylesheet" href="path/to/your/styles.css">
    <link rel="stylesheet" href="style.css">
    <!--css thanh cuộn-->
    <style>
           .navbar {
    position: fixed; /* Giữ thanh điều hướng cố định */
    top: 0; /* Đặt ở trên cùng */
    width: 100%; /* Chiếm toàn bộ chiều rộng */
    z-index: 1000; /* Đảm bảo nó nằm trên các phần tử khác */
    transition: all 0.3s ease; /* Hiệu ứng chuyển tiếp */
}

.navbar.DesktopHeader_isMinimised__sD95R {
    background-color: rgba(255, 255, 255, 0.8); /* Màu nền khi rút gọn */
    padding: 10px 0; /* Giảm khoảng cách trên và dưới */
}

.navbar .navbar-brand {
    font-size: 1.5rem; /* Kích thước chữ lớn hơn khi bình thường */
    transition: font-size 0.3s ease;
}

.navbar.DesktopHeader_isMinimised__sD95R .navbar-brand {
    font-size: 1.2rem; /* Kích thước chữ nhỏ hơn khi rút gọn */
}

/* Đối với thiết bị di động */
@media (max-width: 768px) {
    .navbar {
        padding: 10px; /* Padding cho thiết bị di động */
    }
}

    </style>
</head>
<body style="margin-bottom:200px">
    <!--Header-->
    <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
    <!--Header ends-->
    <div id="content">
        <div id="bg" class=" ">
            <div class="container" style="padding-top:150px">
            <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;" >
            <h1>We sell Happiness :)</h1>
            <p>###</p>
            <a href="products.php" class="btn btn-warning btn-lg text-white">Shop Now</a>

            </div>
            </div>

        </div>
    </div>
    <div class="text-center pt-4 h3">
        Baker's Mart
    </div>
    <!--menu highlights start-->
 <div class="container pt-3">
        <div class="row text-center ">
            <div class="col-6 col-md-3 py-3">
                <a href="category-material.php"> <img src="images/botlambanh.jpg" class="img-fluid " alt="" style="border-radius:0.5rem">
                
                    <div class="h5 pt-3 font-weight-bolder">
                      Nguyên liệu
                   </div>
                 </a>
             </div>
            <div class="col-6 col-md-3 py-3 " >
                <a href="category-tool.php"  >
                  <img src="images/sf400.jpg" class="img-fluid zoom" alt="" style="border-radius:0.5rem" >
                     <div class="h5 pt-3 font-weight-bolder">
                        Dụng cụ
                     </div>
                  </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="category-decorate.php">
                 <img src="images/phukien1.jpg" class="img-fluid   " alt="" style="border-radius:0.5rem">
                <div class="h5 pt-3 font-weight-bolder">
                    Phụ kiện trang trí
                 </div>
             </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="category-ingredients.php">
                 <img src="images/cadong.jpg" class="img-fluid  " alt="" style="border-radius:0.5rem">
                 <div class="h5 pt-3 font-weight-bolder">
                    Pha chế
                 </div>
              </div>
            </a>
        </div>
    </div>

    <!--menu highlights end-->
    <!--footer -->
    <?php include 'includes/footer.php'?>
    <!--footer end-->




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>




</html>

<!-- script thanh cuộn -->
<script>
$(document).ready(function() {
    var navbar = $('.navbar'); // Chọn thanh điều hướng
    var originalOffsetY = navbar.offset().top; // Lấy vị trí ban đầu của thanh điều hướng

    function scroll() {
        if ($(window).scrollTop() > originalOffsetY) {
            navbar.addClass('DesktopHeader_isMinimised__sD95R'); // Thêm lớp khi cuộn xuống
        } else {
            navbar.removeClass('DesktopHeader_isMinimised__sD95R'); // Xóa lớp khi cuộn lên
        }
    }

    document.addEventListener('scroll', scroll); // Lắng nghe sự kiện cuộn
});
</script>

