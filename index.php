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
 
</head>
<?php
function phpAlert($msg1) {
    echo '<script type="text/javascript">alert("' . $msg1 . '")</script>';
}
if(isset($_GET['msg']))
	phpAlert($_GET['msg']);
?>
<body>
  <form method="post" action="Login.php" class="login">
    <pre>
      <table align="center">
			<tr>	
				<td>User ID
				<td><input type="text" name="UserID" required/>
			<tr>
				<td>Passoword
				<td><input type="password" name="Password" required/>
			<tr align="left" >
				<td colspan ="2"><input type="submit" value="Login" style="font:"/>			
    </pre>
  </form>
</body>
</html>
