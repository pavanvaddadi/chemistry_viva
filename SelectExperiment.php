<?php 
	session_start();
	if(!isset($_SESSION['username']))
	{
		session_destroy();
		header("Location: index.php");
	} else {
	    require_once './getExpList.php';
        $data   = $getExpQuery->fetch_all(MYSQLI_ASSOC);
	}
	?>

<html lang="">
<head>
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/global.css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <title>Viva questions</title>
</head>
<body>

    <nav class="navbar primary-color br-0">
        <div class="container wrapper">
            <div class="navbar-header">
                <div class="nav navbar-nav navbar-right iconBtn">
                    <a class="navbar-brand text-white text-dec-none" href="SelectExperiment.php">
                        <button class="btn btn-sm btn-default">Generate Questions</button>
                    </a>
                </div>
                <div class="dropdown configBtn">
                    <button class="btn btn-sm btn-default dropdown-toggle" type="button" data-toggle="dropdown">Configure Data	
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="./experiments/experiment-list.php">Configure Experiments</a></li>
                        <li><a href="./viva-qns/viva-qns-list.php">Configure Viva Questions</a></li>
                    </ul>
                </div>
            </div>

            <div class="nav navbar-nav navbar-right customBtn">
                <a class="text-dec-none" href="Logout.php">
                    <button class="btn btn-sm btn-warning">Logout</button>
                </a>
            </div>
        </div>
    </nav>



    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Generate Questions</div>
            <div class="panel-body">
                <form class="form-inline" action="./SelectExperiment.php" method="get">
                    <div class="form-group">
                        <input type="text" title='User Roll Number' class="form-control" id="email" placeholder="Enter Roll Number" name="rollnumber" required>
                    </div>
                    <div class="form-group">
                        <select class="form-control mr-sm-2" title="select experiment" name="ExperimentNumber" required>
                                <!--<option>-- Select Experiment --</option>-->
                            <optgroup label="Group A">
                                <?php
                                foreach ($data as $row) {
                                    if($row['GroupType'] == 'A') {
                                        echo "<option value=" . $row['ExperimentNumber'] . ">" . $row['ExperimentName'] . "</option>";
                                    }
                                }
                                ?>
                            </optgroup>
                            <optgroup label="Group B">
                                <?php
                                foreach ($data as $row) {
                                    if($row['GroupType'] == 'B') {
                                        echo "<option value=" . $row['ExperimentNumber'] . ">" . $row['ExperimentName'] . "</option>";
                                    }
                                }
                                ?>
                            </optgroup>
                            ?>
                        </select>
                    </div>
                    <button name="submit" type="submit" class="btn btn-sm primary-color">Generate</button>
                </form>
                <hr>
                <?php
                echo '</hr>';
                if(isset($_GET['submit'])) {
                    include 'GenerateQuestions.php';
                } else {
                    echo '<div class="well text-center">Enter the details and click on \'Generate\' </div>';
                }
                ?>
            </div>
        </div>
    </div>
    
	<?php include 'Copyright.php'; ?>
    <!-- jquery plugin -->
    <script type="text/javascript" src="assests/jquery/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="assests/js/bootstrap.min.js"></script>

	</body>
</html>
