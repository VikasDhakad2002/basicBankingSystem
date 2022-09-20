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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <title>Ideal Bank</title>
</head>



<body>


    <nav class="navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="index.php"> <img class="nav-logo" src="images/pexels-monstera-6289028.jpg" alt=""> Ideal Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customer.php">Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transaction.php">Transact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="history.php">History</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid home-section">
        <div class="row">
            <div class="col-md-6 text-area">
                <h1>Ideal Bank</h1>
                <p>Welcome to Ideal Bank</p>
                <p>The Sparks Foundation Bank (TSF) is an Indian multinational, public sector banking and financial services statutory body headquartered in Mumbai, Maharashtra. SBI is the 43rd largest bank in the world and ranked 231st in the Fortune Global
                    500 list of the world's biggest corporations of 2020.</p>
            </div>
            <div class="col-md-6 image-section">
                <img class="img-fluid" src="images/micheile-henderson-ZVprbBmT8QA-unsplash.jpg" alt="">
            </div>

        </div>
    </div>
    <!-- <div class="container-fluid service-section">
        <div class="service">
            <h1 style="margin: auto; text-align: center;">Service</h1>
        </div>
        <div class=" row ">
            <div class="col-lg-4 col-sm-12 ">
                <div class="card first-card ">
                    <img class="card-img-top " src="images/wire-transfer-1668133_1920.jpg " alt="Card image cap ">
                    <div class="card-body ">


                        <a href="# " class="btn btn-primary ">Go somewhere</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-sm-12 ">
                <div class="card ">
                    <img class="card-img-top " src="images/wire-transfer-1668133_1920.jpg " alt="Card image cap ">
                    <div class="card-body ">


                        <a href="# " class="btn btn-primary ">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 ">

                <div class="card ">
                    <img class="card-img-top " src="images/wire-transfer-1668133_1920.jpg " alt="Card image cap ">
                    <div class="card-body ">


                        <a href="# " class="btn btn-primary ">Go somewhere</a>
                    </div>
                </div>

            </div>
        </div>

    </div> -->
    
    <div class="container-fluid service-section">
        <div class="service">
            <h1 style="margin: auto; text-align: center;">Service</h1>
        </div>
        <div class=" row ">
            <div class="col-lg-4 col-sm-12 ">
                <div class="card first-card ">
                    <p>We have one of the largest customer base in the South Asia with 10+ active Users</p>
                    <div class="card-body ">
                        <a href="customer.php " class="btn btn-primary ">See Customers</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-sm-12 ">
                <div class="card ">
                    <p>We offer a great UI for transaction with high level security from different injections</p>
                    <div class="card-body ">
                        <a href="transaction.php" class="btn btn-primary ">Send Money</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 ">

                <div class="card ">
                    <p>We never looses any records of any transaction to make our application ambiguity free</p>
                    <div class="card-body ">
                        <a href="history.php" class="btn btn-primary ">See Trans. History</a>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="container-fluid footer ">
        <div class="row ">
            <div class="col-md-4 footer-image ">

                <p>The Sparks Foundation Bank (TSF) is an Indian multinational, public sector banking and financial services statutory body headquartered in Mumbai, Maharashtra</p>

            </div>

            <div class=" col-md-4 link ">
                <ul>
                    <li class="nav-item ">
                        <a class="nav-link " href="# ">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="customer.php">Customer</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="transaction.php">Transact</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="history.php">History</a>
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

</html>