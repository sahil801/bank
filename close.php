<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
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
                    <li><a href="admin2.php">Home</a></li>
                    <li><a href="logout.php">Logout</a></li>

                </ul>
            </div>
        </nav>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Close an Account</h2>
            </div>

            <div class="panel-body">
                <div style="max-width: 600px; margin: 0 auto">
                    <form action="close2.php" method="post">
                        <div class="form-group">
                            <label for="email">Enter Account Number</label>
                            <input type="text" name="acNo" required class="form-control" />
                        </div>

                        <button type="submit" name="login" class="btn btn-success">Confirm</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="well">
            <h3><i>
                    <marquee>If you have any query please contact: <a href="sahilsoni882001@gmail.com.com">sahilsoni882001@gmail.com</a>
                    </marquee>
                </i>
            </h3>

        </div>

    </div>

</body>

</html>
