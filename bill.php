<?php
ob_start();
session_start();
// print_r($_SESSION);
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
    <div class="container">
        <table class="table">
            <tr class="table-primary">
                <th scope="col" style="text-align: center;" colspan="3">Subscriper Name</th>
                <th scope="col" style="text-align: center;" colspan="3"><?php echo $_SESSION['$data']['$subscriper']; ?></th>

            </tr>
            <tr>
                <th scope="row" style="text-align: center;" colspan="3"> The Subscription Cost=</th>
                <td style="text-align: center;" colspan="3"><?php $sub = 10000;
                                                            $mem = $_SESSION['$data']['number'] * 2500;
                                                            $total = $sub + $mem;
                                                            echo $total . 'L.E'; ?></td>
            </tr>

            <tr class="table-primary">
                <th scope="col" style="text-align: center;">Member Name</th>
                <th scope="col" style="text-align: center;">Football(300 L.E)</th>
                <th scope="col" style="text-align: center;">Swimming(250 L.E)</th>
                <th scope="col" style="text-align: center;">Volly ball(150 L.E)</th>
                <th scope="col" style="text-align: center;">Others(100 L.E)</th>
                <th scope="col" style="text-align: center;">The Total Of Games</th>
            </tr>


            <?php
            
            for ($i = 0; $i < $_SESSION['$data']['number']; $i++) {
                
                $game = $_SESSION['$data']['$member'][$i][1];
               
                echo '<tr><th scope="row" style ="text-align: center;">' . $_SESSION['$data']['$member'][$i][0] . '</th>';
               
                    echo '<td style ="text-align: center;">';
                   
                    if (in_array('300', $game)) {
                        echo '<i class="fas fa-check"></i></td>';
                      
                    } else {
                        echo '<i class="fas fa-times"></i></td>';
                    }
            
                    echo '<td style ="text-align: center;">';
                    if (in_array('250', $game)) {
                        echo '<i class="fas fa-check"></i></td>';
                    } else {
                        echo '<i class="fas fa-times"></i></td>';
                    }
                
                    echo '<td style ="text-align: center;">';
                    if (in_array('150', $game)) {
                        echo '<i class="fas fa-check"></i></td>';
                    } else {
                        echo '<i class="fas fa-times"></i></td>';
                    }
               
                    echo '<td style ="text-align: center;">';
                    if (in_array('100', $game)) {
                        echo '<i class="fas fa-check"></i></td>';
                    } else {
                        echo '<i class="fas fa-times"></i></td>';
                    }
               
                echo '<td style ="text-align: center;">' . array_sum($game) . 'L.E</td>';
                echo '</tr>';

                $sum[$i] = array_sum($game);
               
            }


            ?>
            <tr class="table-primary">
                <th scope="col" style="text-align: center;" colspan="3">Total</th>
                <td scope="col" style="text-align: center;" colspan="3"> <?php $total += array_sum($sum);
                                                                            echo $total . 'L.E'; ?>
                </td>
            </tr>
        </table>
        <form method="post">
            <button type="button" class="btn btn-outline-success float-right">Pay</button>
        </form>
    </div>
    <?php
    if(isset($_POST)) {

         session_unset();
           session_destroy();
        
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