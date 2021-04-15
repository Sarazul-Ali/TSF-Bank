<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSF Bank</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel=" stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mdb.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--navbar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
        <div class="container">
            <a href="index.php" class="navbar-brand text-warning"> <i class="fas fa-landmark fa-3x"></i></i>
                <span class="display-4 ml-4"><u> TSF Bank</u></span>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#na-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="na-navbar">

                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item ">
                        <a class="nav-link active" href="index.php" data-toggle="dropdown"><i class="fa fa-sign-in-alt"></i>
                            Sarazul</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link active" href="#"><i class="fa fa-sign-out-alt "></i>
                            LogOut</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <section class="bg-warning p-1">
        <div class="container">
            <div class="row">
                <h2 class="text-warning"><i class="fa fa-home"></i> Home</h2>
            </div>
        </div>
    </section>


    <!-- body part -->



    <section class="bg_img">
        <div class="container">
            <div class="row justify-content-between down">
                <div class="col-md-3">
                    <div class="card ">
                        <div class="card-header pb-4 text-center bg-info">
                            <i class="fa fa-users fa-10x text-warning "></i>
                        </div>
                        <div class="body mt-1">
                            <a href="customerslist.php" class="btn btn-warning btn-outline-warning btn-block p-4">
                                <span class="font-weight-bold">
                                    Customers List</span></a>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card ">
                        <div class="card-header pb-4 text-center bg-info">
                            <i class="fas fa-donate fa-10x text-warning"></i>
                        </div>
                        <div class="body mt-1">
                            <a href="transfer.php" class="btn btn-primary btn-outline-warning btn-block p-4"><span
                                    class="font-weight-bold">Transfer Money</span> </a>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card ">
                        <div class="card-header pb-4 text-center bg-info">
                            <i class="fa fa-history fa-10x text-warning"></i>
                        </div>
                        <div class="body mt-1">
                            <a href="transaction.php" class="btn btn-danger btn-outline-warning btn-block p-4"><span
                                    class="font-weight-bold">Transaction Details</span> </a>
                        </div>

                    </div>
                </div>
            </div>


        </div>

        <footer class="bg-dark text-warning text-center p-2 no-gutters">
            <div class="container">
                <div>
                    <h4>Copyright <i class="fa fa-copyright" aria-hidden="true"> </i> 2021, TSF Bank</h4>
                    <p>All Rights Reserved <br>
                        Developed & Maintained by<i class="fa fa-user-circle"></i><a
                            href="https://www.linkedin.com/in/sarazul-ali65333/" class="text-danger"> Sarazul Ali</a>
                    </p>
                </div>

            </div>

        </footer>

    </section>




    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/mdb.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</body>

</html>