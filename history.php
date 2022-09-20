<?php
    session_start();
    require_once "pdo.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">


    <title>Document</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="index.php"> <img class="nav-logo" src="images/pexels-monstera-6289028.jpg" alt=""> Ideal Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customer.php">Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transaction.php">Transact</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">History</a>
                </li>
            </ul>
        </div>
    </nav>

     <?php
        if(isset($_SESSION['error']))
         {
            echo ('<p style="color:Red">'.htmlentities($_SESSION['error'])."</p>\n");
            unset($_SESSION['error']);
         }
        if(isset($_SESSION['success']))
         {
            echo ('<p style="color:Green">'.htmlentities($_SESSION['success'])."</p>\n");
            unset($_SESSION['success']);
         }
    ?>
    
    <div class="table-head">
        <h2> Transaction History</h2>
    </div>


    <div class="container-fluid customer-table"  style="overflow-x: auto;">
        <table id="myTable" class="table table-striped table-bordered datatable no-footer tablemobile" style="overflow: scroll;">
            <thead>
                <tr>
                    <th>Transaction id</th>
                    <th>Sender Id</th>
                    <th>Reciever Id</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $stmt = $db->query("SELECT customers.name as sender, c.name as receiver, history.amount, history.id, history.transaction_date from customers,history, customers AS c WHERE customers.id = history.sender_id AND c.id = history.receiver_id;");
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        $originalDate = $row['transaction_date'];
                        $newDate = date("d-m-Y", strtotime($originalDate));
                        $newTime = date('H:i:s', strtotime($originalDate));
                        ?>
                        <tr>
                            <td><?= $row['id']?></td>
                            <td><?= $row['sender']?></td>
                            <td><?= $row['receiver']?></td>
                            <td><?= $row['amount']?></td>
                            <td><?= $newDate?></td>
                            <td><?= $newTime?></td>
                        </tr>
                    <?php }
                ?>
            </tbody>
        </table>

    </div>



    <div class="container-fluid footer ">
        <div class="row ">
            <div class="col-md-4 footer-image ">

                <p>The Sparks Foundation Bank (TSF) is an Indian multinational, public sector banking and financial services statutory body headquartered in Mumbai, Maharashtra</p>

            </div>

            <div class=" col-md-4 link ">
                <ul>
                    <li class="nav-item ">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="customer.php">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transaction.php">Transact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">History</a>
                    </li>

                </ul>
            </div>
            <div class=" col-md-4 social-link ">
                <a href=" "><i class="fab fa-linkedin fa-2x "></i></a>
                <a href=" "><i class="fab fa-twitter-square fa-2x "></i> </a>
                <a href=" "><i class="fab fa-facebook-square fa-2x "></i></a>

            </div>
        </div>

    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous "></script>

<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

</html>