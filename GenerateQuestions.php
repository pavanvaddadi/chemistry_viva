<?php
	$us="root";
	$pw="";
	$server="localhost";
	$Current_Question = $_GET['ExperimentNumber'];
	$RegID = $_GET['rollnumber'];
	$con = mysqli_connect($server, $us, $pw,'chemisrty lab');
	$sql = "SELECT * FROM `Questions` WHERE `Experiment` != $Current_Question";
	$result = mysqli_query($con,$sql);	
	$RandomIndexes = [];
	//mkdir("Viva",0777);
	$fp = fopen('Viva/Viva questions ('.$RegID.').txt','w');
	for($i=0; ($row=mysqli_fetch_assoc($result))>0; $i++)
	{
		$AllQuestions[$i] = $row['Question'];
	}
	echo "<div><pre><h2 align='center'	>Viva questions for $RegID</h2><table align='center'>";
	fwrite($fp,"Viva questions for ".$RegID."\n\n");
	for($i=0; $i<5; $i++)	
	{
		$Index = rand(0,44);
		while(in_array($Index, $RandomIndexes))
		{
			$Index = rand(0,44);
		}
		$RandomIndexes[$i] = $Index;
		$VivaQuestions[$i] = $AllQuestions[$Index];
		echo "<tr><td>Q".($i+1).". ".$VivaQuestions[$i];
		fwrite($fp,"Q".($i+1).". ".$VivaQuestions[$i]."\n");
	}
	//print_r($AllQuestions);
	echo "</pre></div>";
	fclose($fp);
	
?>