<?php 
$db=mysqli_connect('localhost','root','','bank');

$sql=mysqli_query($db,'SELECT * FROM `user` order by id');
$details=mysqli_fetch_all($sql,MYSQLI_ASSOC);
$new_sender_amount=0;
if(isset($_POST['submit']))
{
    $sender= $_POST['sender'];
    $receiver= $_POST['receiver'];
    $amount = $_POST['amount'];

    $insert= "INSERT INTO `transfer`(`tid`, `sender`, `receiver`, `amount`) VALUES (NULL,'$sender','$receiver','$amount')";
    $sql_insert=mysqli_query($db,$insert);
    if($insert)
    {
        $amount_sql="SELECT * FROM `user` WHERE name='$sender'";
        $amount_sql_ex=mysqli_query($db,$amount_sql);
        $amount_fetch=mysqli_fetch_array($amount_sql_ex);
        $sender_amount=$amount_fetch['amount'];
        $new_sender_amount=($sender_amount-$amount);

        $update_sender_sql=mysqli_query($db,"UPDATE `user` SET `amount`='$new_sender_amount' WHERE name='$sender'");

        $ramount_sql="SELECT * FROM `user` WHERE name='$receiver'";
        $ramount_sql_ex=mysqli_query($db,$ramount_sql);
        $ramount_fetch=mysqli_fetch_array($ramount_sql_ex);
        $receiver_amount=$ramount_fetch['amount'];
        $new_receiver_amount=($receiver_amount+$amount);

        $update_receiver_sql=mysqli_query($db,"UPDATE `user` SET `amount`='$new_receiver_amount' WHERE name='$receiver'");

        ?>
        <script type="text/javascript">
            alert("Your Transaction has been Successfully Completed");
            window.location.href="transaction.php";
        </script>
        <script type="text/javascript">
            
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert("Something Went Wrong!!! <br> Try Again");
        </script>
        <?php
    }
}

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
                <h2 class="text-warning"><i class="fas fa-donate"></i> Transfer</h2>
            </div>
        </div>
    </section>

    <!-- body part -->

    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header bg-info text-warning text-center">
                        <h3><i class="fas fa-donate"></i> Transfer Money</h3>
                    </div>
                    <div class="card-body bg-white flex-center">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="inputsender">Sender :</label>
                                <select name="sender" id="inputsender" required>
                                    <option value="">Select the Sender</option>
                                    <?php 
                                        foreach($details as $user)
                                        {
                                            $id=$user['id'];
                                            $name=$user['name'];
                                            $amnt=$user['amount'];
                                        ?>
                                            <option value="<?=$name;?>">
                                                <?=$name;?>    
                                            </option>
                                        <?php   
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputreceiver">Receiver :</label>
                                <select name="receiver" id="inputreceiver" required>
                                    <option value="">Select the Receiver</option>
                                    <?php 
                                        foreach($details as $ruser)
                                        {
                                            $rid=$ruser['id'];
                                            $rname=$ruser['name'];
                                            $ramnt=$ruser['amount'];
                                        ?>
                                            <option value="<?=$rname;?>">
                                                <?=$rname;?>    
                                            </option>
                                        <?php   
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputamount">Amount :</label>
                                <input type="tel" name="amount" requ ired>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">

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