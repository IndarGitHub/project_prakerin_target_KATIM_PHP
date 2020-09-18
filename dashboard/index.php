<?php 
require_once("../akses/auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- <a class="navbar-brand" href="../dashboard">Title</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../dashboard">Dashboard<span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Project
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../net_margin">Net Margin</a>
          <a class="dropdown-item" href="../new_account">New Account</a>
          <a class="dropdown-item" href="../top_up">Top Up</a>
          <a class="dropdown-item" href="../jml_staff">Jumlah Staff</a>
          <a class="dropdown-item" href="../app_done">App Done</a>
          <!-- <a class="dropdown-item" href="#">Another action</a> -->
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
  </div>
</nav>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">
                    <h3>Hi, <?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["username"] ?></p>

                    <p><a href="../akses/logout">Logout</a></p>
                </div>
            </div>

        </div>
        <div class="col-md-8">

        <?php
          require_once("../config.php");
          // get tanggal
          $get_tanggal = $db->prepare('SELECT * FROM net_margin GROUP BY tanggal');
          $get_tanggal->execute();
          $data_get_tanggal = $get_tanggal->fetch(PDO::FETCH_ASSOC);
          $tanggal = $data_get_tanggal['tanggal'];

          // select data net margin
          $net_margin1 = $db->prepare('SELECT * FROM net_margin GROUP BY tanggal');
          $net_margin1->execute();
          $data_net_margin1 = $net_margin1->fetchAll();

          // select get net margin
          $net_margin = $db->prepare('SELECT * FROM net_margin GROUP BY tanggal ');
          $net_margin->execute();
          $data_net_margin = $net_margin->fetchAll();

          // select get new account
          $new_account = $db->prepare('SELECT * FROM new_account GROUP BY tanggal ');
          $new_account->execute();
          $data_new_account = $new_account->fetchAll();

          // select get topup
          $top_up = $db->prepare('SELECT * FROM top_up GROUP BY tanggal ');
          $top_up->execute();
          $data_top_up = $top_up->fetchAll();

          // select get jml staff
          $jml_staff = $db->prepare('SELECT * FROM jml_staff GROUP BY tanggal ');
          $jml_staff->execute();
          $data_jml_staff = $jml_staff->fetchAll();

          // select get app done
          $app_done = $db->prepare('SELECT * FROM app_done GROUP BY tanggal ');
          $app_done->execute();
          $data_app_done = $app_done->fetchAll();

        ?>

        <div class="card">
          <ul class="list-group list-group-flush">
          <?php foreach ($data_net_margin as $row => $data_net1) { ?>
            <li class="list-group-item">

            <p class="card-title"><b class="text-success">Tanggal : <?php echo $data_net1['tanggal'] ?></b></p>
            <p class="card-text">Agar Net Margin Capai = <?php $net_margin_kw3_1 = number_format($data_net1['kw3']); echo $net_margin_kw3_1; ?> / Kwartal 3 Diperlukan:</p>

            <?php foreach ($data_new_account as $row => $data_new_acc) { ?>
            <p class="card-text">o> <?php echo $data_new_acc['kw3'] ?> NEW ACC / KWARTAL 3 </p>
            <?php } ?>

            <?php foreach ($data_top_up as $row => $data_top) { ?>
            <p class="card-text">o> <?php $top_up_kw3 = number_format($data_top['kw3']); echo $top_up_kw3 ?> TOP UP / KWARTAL 3</p>
            <?php } ?>

            <?php foreach ($data_jml_staff as $row => $data_jml) { ?>
            <p class="card-text">o> <?php echo $data_jml['kw3'] ?> STAFF / KWARTAL 3 </p>
            <?php } ?>

            <?php foreach ($data_app_done as $row => $data_app) { ?>
            <p class="card-text">o> <?php echo $data_app['kw3'] ?> APP DONE / KWARTAL 3</p>
            <?php } ?>

            </li>
            <?php } ?>

          <ul>
        </div>
         
        </div>
    
    </div>
</div>

</body>
</html>