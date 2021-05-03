<?php require 'template/session.php' ?>
    <?php
        if(empty($user) ||	$user->role == 1){
            header("Location: index.php");
        }else{
    ?> 
    <?php require 'template/header.php' ?>
    <?php require 'template/navbar.php'; ?>

<br><br>

<div class="container">
  <div class="row">
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img src="assets/img/p1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Face Wash</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="transaksi.php" class="btn btn-primary">Buy</a>
        </div>
        </div>
    </div>

    <div class="col-sm">
      <div class="card" style="width: 18rem;">
            <img src="assets/img/p2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Micellar Water</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="transaksi.php" class="btn btn-primary">Buy</a>
        </div>
        </div>
    </div>
    
    <div class="col-sm">
    <div class="card" style="width: 18rem;">
            <img src="assets/img/p3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Toner</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="transaksi.php" class="btn btn-primary">Buy</a>
        </div>
        </div>
    </div>
  </div>
</div>

    <?php }?>