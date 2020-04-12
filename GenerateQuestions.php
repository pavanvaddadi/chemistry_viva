<?php
	$us="root";
	$pw="";
	$server="localhost";
	$Current_Question = $_GET['ExperimentNumber'];
	$RegID = $_GET['rollnumber'];
	$con = mysqli_connect($server, $us, $pw,'chemisrty_lab');
	//$sql = "SELECT * FROM `Questions` WHERE `Experiment` != $Current_Question AND `IsActive` = '1'";
	$sql = "SELECT questions.Serial, questions.Question, questions.Experiment, experiments.GroupType FROM `questions`\n"
    . "INNER JOIN experiments ON questions.`Experiment` = experiments.ExperimentNumber\n"
    . "WHERE questions.Experiment != $Current_Question AND questions.IsActive = 1";
	$result = mysqli_query($con,$sql);	
	$RandomSerials = [];
	$RandomIndexesA = [];
	$RandomIndexesB = [];
	
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

	$fp = fopen('Viva/Viva_questions('.$RegID.').txt','w');
	$GroupASerials = [];
	$GroupBSerials = [];
	$GroupAQuestions = [];
	$GroupBQuestions = [];
	for($i=0; ($row=mysqli_fetch_assoc($result))>0; $i++)
	{
		$AllQuestions[] = $row['Question'];
		$AllSerials[] = $row['Serial'];
		if($row['GroupType']=='A')
		{
			$GroupAQuestions[] = $row['Question'];
			$GroupASerials[] = $row['Serial'];
		}
		elseif($row['GroupType']=='B')
		{
			$GroupBQuestions[] = $row['Question'];
			$GroupBSerials[] = $row['Serial'];			
		}
	}
			
	echo '<div class="list-group">
	<div class="list-group-item primary-color">Viva questions for '.$RegID.'
	<a class="text-dec-none" href="./Viva/Viva_questions('.$RegID.').txt" download>
		<button class="btn btn-default btn-sm pull-right iconBtn">Download</button>
	</a>
	</div>';
	$CountOfAllQs = count($AllQuestions) - 1;
	$CountOfGroupA = count($GroupASerials) - 1;
	$CountOfGroupB = count($GroupBSerials) - 1;
	
	fwrite($fp,"Questions for ".$RegID."\n\n");
	fwrite($fp,"Experiment: ".$expTitles[$Current_Question - 1].".\n\nViva Questions:\n");
	//Questions 1 ad 2 from Group A
	for($i=0; $i<2; $i++)
	{
		$Index = rand(0, $CountOfGroupA);
		while(in_array($Index, $RandomIndexesA))
		{
			$Index = rand(0,$CountOfGroupA);
		}
		$RandomSerials[] = $GroupASerials[$Index];
		$RandomIndexesA[] = $Index;
		$VivaQuestions[] = $GroupAQuestions[$Index];
		
		echo '<div class="list-group-item">'.($i+1).')&nbsp;'.$VivaQuestions[$i].' </div>';
		fwrite($fp,($i+1).". ".$VivaQuestions[$i]."\n");
	}
	//Questions 3 and 4 from Group B
	for($j=0; $j<2; $j++)
	{
		$Index = rand(0, $CountOfGroupB);
		while(in_array($Index, $RandomIndexesB))
		{
			$Index = rand(0,$CountOfGroupB);
		}
		$RandomSerials[] = $GroupBSerials[$Index];
		$RandomIndexesB[] = $Index;
		$VivaQuestions[] = $GroupBQuestions[$Index];
		
		echo '<div class="list-group-item">'.($i+$j+1).')&nbsp;'.$VivaQuestions[$i+$j].' </div>';
		fwrite($fp,($i+$j+1).". ".$VivaQuestions[$i+$j]."\n");
	}
	//5th question
	$Index = rand(0, $CountOfAllQs);
	while(in_array($AllSerials[$Index], $RandomSerials))
	{
		$Index = rand(0,$CountOfAllQs);
	}
	$VivaQuestions[] = $AllQuestions[$Index];
	$RandomSerials[] = $AllSerials[$Index];
	
	echo '<div class="list-group-item">'.($i+$j+1).')&nbsp;'.$VivaQuestions[$i+$j].' </div>';
	fwrite($fp,($i+$j+1).". ".$VivaQuestions[$i+$j]."\n");
	 //echo "<pre><table><tr>";
	/* echo "<td><pre>Group A";
	print_r ($GroupASerials);
	echo "</pre><td><pre>";
	print_r ($RandomIndexesA);
	echo "</pre><td><pre>";
	echo "Group B";
	print_r ($GroupBSerials);
	echo "</pre><td><pre>";
    print_r ($RandomIndexesB);
	echo "</pre><td><pre>";
	echo "Selected serials";
	//echo "</pre><td><pre>";
	print_r ($RandomSerials);
	//print_r($AllQuestions);
	//print_r($AllSerials);
	
	//print_r ($Groups); */
	/* echo $CountOfAllQs."&nbsp".$CountOfGroupA."&nbsp".$CountOfGroupB."\n";
	 for($k=0;$k<5;$k++)
	{
		if(in_array($RandomSerials[$k], $GroupASerials))
			echo "A ";
		else if (in_array($RandomSerials[$k], $GroupBSerials))
			echo "B ";
	}  */
	
	//echo "</pre>";  
	echo "</pre></div>";
	fclose($fp);
	
?>
