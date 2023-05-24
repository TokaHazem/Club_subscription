<?php
ob_start();
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
  <link href="css/css/all.css" rel="stylesheet" type="text/css">
</head>

<body>
  <?php

  echo ' <form  method="post" >';

  for ($i = 0; $i < $_SESSION['$data']['number']; $i++) {
    echo ' <br>  <div class="row"> <div class="col-3">
         </div>
         <div class="col-6">
            <label for="">Member Name</label>
            <input type="text" placeholder="Pleas Enter Your Name" class="form-control" name="$name[]" >
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="300" id="defaultCheck1" name="$games[' . $i . '][]">
            <label class="form-check-label" for="defaultCheck1">
              Football (300 L.E) 
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="250" id="defaultCheck1"name="$games[' . $i . '][]">
            <label class="form-check-label" for="defaultCheck1">
            Swimming (250 L.E)
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="150" id="defaultCheck1"name="$games[' . $i . '][]">
            <label class="form-check-label" for="defaultCheck1">
            Volley ball  (150 L.E) 
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="100" id="defaultCheck1"name="$games['. $i .'][]">
            <label class="form-check-label" for="defaultCheck1">
            Others (100 L.E) 
            </label>  </div> </div> </div>';
  }
  echo  '<br>  <div class="row"> <div class="col-3">
        </div>
        <button class="btn btn-primary">
            Submit
        </button>
        <div class="col-3">
        </div>
        </div> 
        </form>';
  if ($_POST) {

    for ($i = 0; $i < $_SESSION['$data']['number']; $i++) {
      $_SESSION['$data']['$member'][$i] = [$_POST['$name'][$i], $_POST['$games'][$i]];
    }
    header('Location: bill.php');
  }


  ob_end_flush();
  ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>