<?php 
	session_start();
	if(!isset($_SESSION['username']))
	{
		session_destroy();
		header("Location: index.php");
	}
?>
<html lang="">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/global.css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
	<head>
		<title>Viva questions</title>
	</head>
	<body>
    <nav class="navbar primary-color br-0">
        <div class="container wrapper">
            <div class="navbar-header">
                <div class="navbar-brand text-white text-dec-none">Generate Viva Questions</div>
            </div>

           <div class="nav navbar-nav navbar-right customBtn">
               <a class="text-dec-none" href="Logout.php">
                    <button class="btn btn-sm btn-warning">Logout</button>
               </a>
           </div>
        </div>
    </nav>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-inline" action="./SelectExperiment.php" method="get">
                    <div class="form-group">
                        <input type="text" title='User Roll Number' class="form-control" id="email" placeholder="Enter Roll Number" name="rollnumber" required>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <select class="form-control mr-sm-2" title="select experiment" name="ExperimentNumber" required>
                                <option disabled>-- Select Experiment --</option>
                                <option value='1'>Determination of HCl using sodium carbonate</option>
                                <option value='2'>Determination of strength of acid in lead acid battery</option>
                                <option value='3'>Determination of percent of CaO in cement</option>
                                <option value='4'>Determination of total hardness of water</option>
                                <option value='5'>COLORIMETRY</option>
                                <option value='6'>pH metry</option>
                                <option value='7'>Conductometry</option>
                                <option value='8'>Potentiometry</option>
                                <option value='9'>Determnation of acid number and saponification number of lubricant</option>
                                <option value='10'>Detrmination of adsorption of acetic acid on charcoal</option>
                            </select>
                        </div>
                    </div>
                    <button name="submit" type="submit" class="btn btn-sm primary-color">Generate</button>
                </form>
                <hr>
                <?php
                echo '</hr>';
                if(isset($_GET['submit'])) {
                    include 'GenerateQuestions.php';
                } else {
                    echo '<div class="well text-center">No viva questions generated yet!</div>';
                }
                ?>
            </div>
        </div>
    </div>

	</body>
</html>
