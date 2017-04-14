<?php
session_start();
require 'Autoloader.php';
Autoloader::register();
?>
<?php include 'Assets/includes/header.php'; ?>

<!-- Page Content -->
<div class="container">

    <hr>
    <hr>

    <div class="row">
        <div class="col-sm-6">
            <a href="index2.php"><img class="img-circle img-responsive img-center admin" alt=""></a>
            <h2>Evenement Externe</h2>
        </div>
        <div class="col-sm-6">
            <a href="indexBack.php"><img class="img-circle img-responsive img-center user" alt=""></a>
            <h2>Evenement Interne</h2>
        </div>
    </div>
    <!-- /.row -->

    <hr>
    <hr>

<?php include 'Assets/includes/footer.php'; ?>