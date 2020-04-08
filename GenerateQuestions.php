<?php
	$us="root";
	$pw="";
	$server="localhost";
	$Current_Question = $_GET['ExperimentNumber'];
	$RegID = $_GET['rollnumber'];
	$con = mysqli_connect($server, $us, $pw,'chemisrty_lab');
	$sql = "SELECT * FROM `Questions` WHERE `Experiment` != $Current_Question";
	$result = mysqli_query($con,$sql);	
	$RandomIndexes = [];
	$expTitles = ['Determination of HCl using sodium carbonate',
		'Determination of strength of acid in lead acid battery',
		'Determination of percent of CaO in cement',
		'Determination of total hardness of water',
		'COLORIMETRY',
		'pH metry',
		'Conductometry',
		'Potentiometry',
		'Determnation of acid number and saponification number of lubricant',
		'Detrmination of adsorption of acetic acid on charcoal'];

	//mkdir("Viva",0777);
	$fp = fopen('Viva/Viva_questions('.$RegID.').txt','w');
	for($i=0; ($row=mysqli_fetch_assoc($result))>0; $i++)
	{
		$AllQuestions[$i] = $row['Question'];
	}
	echo '<div class="list-group">
	<div class="list-group-item primary-color">Viva Questions for: '.$RegID.'
	<a class="text-dec-none" href="./Viva/Viva_questions('.$RegID.').txt" download>
		<button class="btn btn-default btn-sm pull-right iconBtn">Download</button>
	</a>
	</div>';
	$remainQuestions = count($AllQuestions) - 1;
	fwrite($fp,"Viva questions for ".$RegID."\n\n");
	fwrite($fp,$Current_Question.") ".$expTitles[$Current_Question - 1]."\n\n");
	for($i=0; $i<5; $i++)
	{
		$Index = rand(0, $remainQuestions);
		while(in_array($Index, $RandomIndexes))
		{
			$Index = rand(0,$remainQuestions);
		}
		$RandomIndexes[$i] = $Index;
		$VivaQuestions[$i] = $AllQuestions[$Index];
		echo '<div class="list-group-item">Q'.($i+1).')&nbsp;'.$VivaQuestions[$i].' </div>';
		fwrite($fp,"Q".($i+1).". ".$VivaQuestions[$i]."\n");
	}
	//print_r($AllQuestions);
	echo "</pre></div>";
	fclose($fp);
	
?>
