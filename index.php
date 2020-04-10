<html lang="">
<?php
session_start();
if(isset($_SESSION['username']))
    header("Location: SelectExperiment.php");
/* else{
    session_unset();
    session_destroy();
} */
?>

<head>
    <title>Login page</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/global.css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
</head>
<body>
<div class='loginPage'></div>
    <div class="container loginBox">
        <div class="panel panel-default myPanel">
            <div class="panel-heading primary-color text-uppercase">
                <h4 class="font-bold text-center">Chemistry Lab Exam</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="Login.php" class="login">
                    <div class="form-group">
                        <input type="text" title="userName" placeholder="Enter User Name" class="form-control" name="UserID" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="Password" title="password" placeholder="Enter Password" required>
                    </div>
                    <button type="submit" class="btn btn-block primary-color">Login</button>
                </form>
                <?php
                if(isset($_GET['msg'])) {
                    echo '
                     <div class="alert alert-danger">
                    <div class="text-center"> Invalid User Name or Password</div>
                </div>';
                }
                ?>
            </div>
        </div>
    </div>
    <?php include 'Copyright.php'; ?>
</body>
</html>
