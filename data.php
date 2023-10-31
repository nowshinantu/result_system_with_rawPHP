<?php

    include_once 'classes/register.php';
    $res = new register();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $register = $res->addregister($_POST);
    }

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
    <div class="col-7">

      <?php

          if(isset($register)){
            ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong><?=$register?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <?php

            }

             ?>

      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-6">
                <h2>Add Information</h2>
            </div>
            <div class="col-6">
                <a href="result.php" class="btn btn-primary float-right">Results</a>
            </div>
          </div>

        </div>

        <div class="card-body">
          <form method="post" enctype="multipart/form-data">
            <div class="form-group">

              <label for="">Name:</label>
              <input type="text" class="form-control" name="name" value="" placeholder="Enter Your Name">

              <label for="">ID:</label>
              <input type="number" class="form-control" name="id" value="" placeholder="Enter Your ID">

              <label for="">Section:</label>
              <input type="text" class="form-control" name="section" value="" placeholder="Enter Your Section">

                <div class="row">
                  <div class="col-6">
                    <label for="">Bangla:</label>
                    <input type="number" class="form-control" name="bangla" value="" placeholder="Enter Your Marks">
                  </div>

                  <div class="col-6">
                    <label for="">English:</label>
                    <input type="number" class="form-control" name="english" value="" placeholder="Enter Your Marks">
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                    <label for="">Mathematics:</label>
                    <input type="number" class="form-control" name="math" value="" placeholder="Enter Your Marks">
                  </div>

                  <div class="col-6">
                    <label for="">Biology:</label>
                    <input type="number" class="form-control" name="bio" value="" placeholder="Enter Your Marks">
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                    <label for="">Physics:</label>
                    <input type="number" class="form-control" name="physics" value="" placeholder="Enter Your Marks">
                  </div>

                  <div class="col-6">
                    <label for="">Chemistry:</label>
                    <input type="number" class="form-control" name="chemistry" value="" placeholder="Enter Your Marks">
                  </div>
                </div>



              <br>
              <input type="submit" name="submit" value="Submit" class="btn btn-block btn-primary">

            </div>

          </form>

        </div>

      </div>

    </div>

        </div>
        </div>

  </body>
</html>
