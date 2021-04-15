<?php 
$db=mysqli_connect('localhost','root','','bank');

$sql=mysqli_query($db,'SELECT * FROM `transfer` order by tid desc');
$details=mysqli_fetch_all($sql,MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel=" stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mdb.css">
    <link rel="stylesheet" href="css/style1.css">
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
                    <li class="navbar-item dropdown">
                        <a class="nav-link active" href="index.php" data-toggle="dropdown"><i class="fa fa-sign-in-alt"></i>

                            Sarazul</a>
                        <div class="dropdown-menu p-2">
                            <a class="dropdown-item" href="#"><i class="fa fa-user-circle"></i>
                                Profile</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-cogs"></i> Setting</a>


                        </div>
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
                <h2 class="text-warning"><i class="fa fa-history"></i> Transaction</h2>
            </div>
        </div>
    </section>

    <!-- body part -->

    <div class="container">
        <div class="card mt-5">
            <div class="card-header bg-info text-warning">
                <h3><i class="fa fa-history"></i> Transaction Details</h3>
            </div>
            <div class="card-body bg-light">
                <table class="table table-hover table-striped text-center table-responsive-sm">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>Amount</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php 
                            foreach($details as $user)
                            {
                                $id=$user['tid'];
                                $acc=$user['receiver'];
                                $sender=$user['sender'];
                                $amnt=$user['amount'];
                        ?>
                        <tr>
                            <td><?php echo $sender; ?></td>
                            <td><?php echo $acc; ?></td>
                            <td><?php echo $amnt; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>



    <footer class="bg-dark text-warning text-center p-3 no-gutters mt-4">
        <div class="container">
            <div>
                <h4>Copyright <i class="fa fa-copyright" aria-hidden="true"> </i> 2021, TSF Bank</h4>
                <p>All Rights Reserved <br>
                    Developed & Maintained by <i class="fa fa-user-circle"></i><a
                        href="https://www.linkedin.com/in/sarazul-ali65333/" class="text-danger"> Sarazul Ali</a>
                </p>
            </div>

        </div>

    </footer>




    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/mdb.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</body>

</html>