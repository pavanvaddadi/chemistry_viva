<?php 
	session_start();
	if(!isset($_SESSION['username']))
	{
		session_destroy();
		header("Location: index.php");
	}
?>
<html>
	<head>
		<title>Viva questions</title>
	</head>
	<body>
		<div>
			<a href="logout.php" align="center">Logout</a>
			<div>
				<pre>
					<form action="SelectExperiment.php" method="get">
						<table align="center">
						<th colspan ="2"><h2>Generate Viva Questions</th>
						<tr>	
							<td>Registered number
							<td><input type="text" name="rollnumber" required/>
						<tr>
							<td>Experiment
							<td><select name="ExperimentNumber" required>
								<option value='1' >Experiment 1</option>
								<option value='2' >Experiment 2</option>
								<option value='3' >Experiment 3</option>
								<option value='4' >Experiment 4</option>
								<option value='5' >Experiment 5</option>
								<option value='6' >Experiment 6</option>
								<option value='7' >Experiment 7</option>
								<option value='8' >Experiment 8</option>
								<option value='9' >Experiment 9</option>
								<option value='10' >Experiment 10</option>
						<tr align="left" >
							<td colspan ="2"><input type="submit" value="Get Viva Questions" style="font:"/>

					</form>
				</pre>
			</div>
			<?php 
				if(isset($_GET['ExperimentNumber']))
					include 'GenerateQuestions.php';
			?>
		</div>
		<!--<div>
			<table align="">
				<tr align="left" >
					<td colspan ="2"><a href="logout.php">Logout</a>
		</div> -->
	</body>
</html>