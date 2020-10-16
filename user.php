<?php
  session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="css/jquery.min.js"></script>
    <script src="css/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Our Banking Management System</a>
                </div>
                <ul class="nav navbar-nav pull-right">
                    <li><a href="user.php">Home</a></li>
                    <li><a href="logout.php">Logout</a></li>

                </ul>
            </div>
        </nav>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>WElCOME! Mr. <?php echo $_SESSION['name']; ?></h2>
            </div>
            <div style="max-width: 250px; margin: 0 auto">
                <h4>1. <a href="open.php">Open an Acccount</a></h4>
                <h4>2. <a href="deposit.php">Deposit Money</a></h4>
                <h4>3. <a href="withdraw.php">Withdraw Money</a></h4>
                <h4>4. <a href="transfer.php">Transfer Money</a></h4>
                <h4>5. <a href="info.php">Show Account's Informstion</a></h4>
            </div>
            <div class="panel-body">

            </div>
        </div>

        <div class="well">
            <h3><i>
                    <marquee>If you have any query please contact: <a href="sahilsoni882001@gmail.com">sahilsoni882001@gmail.com</a>
                </i></marquee>
            </h3>
        </div>

    </div>

</body>

</html>
