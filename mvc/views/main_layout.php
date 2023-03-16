<?php require "inc/head.php" ?>
<?php require_once "./mvc/models/NguoiDungModel.php"?>
<?php
if(!isset($_COOKIE['token'])){
    echo "<script>window.location = './auth/signin'</script>";
}
?>
<body>
    <!-- Page Container -->
    <div id="page-container" class="sidebar-o sidebar-light side-scroll page-header-fixed page-header-dark main-content-narrow remember-theme">
        <?php include "inc/navbar.php" ?>
        <?php include "inc/header.php" ?>
        <!-- Main Container -->
        <main id="main-container">
        <!-- Page Content -->
        <?php include "./mvc/views/pages/".$data['Page'].".php" ?>
        <!-- END Page Content -->
        </main>
        <?php include "inc/footer.php" ?>
    </div>
    <!-- END Page Container -->
    <?php include "inc/script.php" ?>
</body>
</html>
<?php require_once "./mvc/models/NguoiDungModel.php"?>
<?php
$token = $_COOKIE['token'];
$nguoidung = new NguoiDungModel();
if($nguoidung->validateToken($token) == null){
    echo "<script>window.location = './auth/signin'</script>";
}
?>

