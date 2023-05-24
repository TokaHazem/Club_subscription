<?php

session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <h1 class="text-danger text-center " style="margin: 20px auto;">Subscription Application</h1>
  <form  method="post" >
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6">
            <label for="">Subscriber Name</label>
            <input type="text" placeholder="Pleas Enter Your Name" class="form-control" name="$subscriper" >
            <small id="emailHelp" class="form-text text-muted">Class subscription starts with <b>10,000 EPG</b></small>
            <label for="">Count of Family Members</label>
            <input type="number" placeholder=" Enter the count of your family " class="form-control" name="number">
            <small id="emailHelp" class="form-text text-muted">Cost of each Member is <b>2,500 EPG</b></small>
            <br>
            <button class="btn btn-primary">
                Subscrib
            </button>
            </div>
            <div class="col-3">
            </div>
        </div>
        
    </form>
    <?php
   
     if($_POST)
     { $_SESSION['$data']=$_POST;
      header('Location: Family.php');
      
     }
     
    
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>