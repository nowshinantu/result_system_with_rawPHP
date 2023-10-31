<?php

    include_once 'classes/register.php';
    $res = new register();

    if(isset($_GET['id'])){
      $id = ($_GET['id']);
    }

    // if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //   $register = $res->addregister($_POST);
    // }

 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <style media="screen">
  h1{
    color: #0B5345;
  }
  img{
    height: 50px;
  }
  </style>
  <body>
    <div class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-10 pt-2 pl-4">
            <img src="right.png" alt="">
          </div>
          <div class="col-1 pt-3 pl-5">
            <a href="index.php">Home</a></div>
            <div class="col-1 pt-3 pl-3">
              <a href="data.php">Add info</a>
            </div>
          </div>
        </div>
      </div>

      <br><br>
      <div class="container-fluid d-flex justify-content-center">
      <div class="col-10">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-6">
                <h2>Marksheet</h2>
              </div>
              <div class="col-6">
                <a href="result.php" class="btn btn-primary float-right">Back</a>
              </div>
            </div>
          </div>

          <div class="card-body">

            <table class="table table-bordered">
              <tr>
                <th>Name</th>
                <th>ID</th>
                <th>Section</th>
                <th>Bangla</th>
                <th>English</th>
                <th>Mathematics</th>
                <th>Biology</th>
                <th>Physics</th>
                <th>Chemistry</th>
                <th>Total</th>
                <th>Grade</th>


              </tr>

                  <?php

                      $allres = $res->view($id);
                      if($allres){
                        while($row = mysqli_fetch_assoc($allres)){
                          ?>

                          <tr>
                            <td><?=$row['name']?></td>
                            <td><?=$row['id']?></td>
                            <td><?=$row['section']?></td>
                            <td><?=$row['bangla']?></td>
                            <td><?=$row['english']?></td>
                            <td><?=$row['math']?></td>
                            <td><?=$row['bio']?></td>
                            <td><?=$row['physics']?></td>
                            <td><?=$row['chemistry']?></td>
                            <td><?=$row['total']?></td>
                            <td><?=$row['grade']?></td>
                          </tr>

                          <?php
                        }
                      }

                   ?>


            </table>

    </body>
    </html>
