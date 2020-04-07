<html>
	<head>
		<title>Viva questions</title>
	</head>
	<body>
		<form action="GenerateQuestions.php" method="get">
		<table align="center">
		<tr>	
			<td>Registered number
			<td><input type="text" name="rollnumber" required/>
		<tr>
			<td>Experiment
			<td><select name="ExperimentNumber" required>
				<option value='1' >Experiment 1</option>
				<option value='2' >Experiment 2</option>
				<option value='3' >Experiment 3</option>
		<tr align="left" >
			<td colspan ="2"><input type="submit" value="Submit" style="font:"/>
		</form>
	</body>
</html>