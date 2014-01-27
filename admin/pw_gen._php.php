<?php
	include_once("../lib/php/pbkdf2.php");
?>
<html>
	<head></head>
	<body>
		<h1>form</h1>
		<form name="input" method="get">
			pw: <input type="text" name="pw">
			<input type="submit" value="Submit">
		</form>
		<hr>
		<h1>pass</h1>
		<pre>
			<?php
				if(isset($_GET['pw']))
					echo create_hash($_GET['pw']);
			?>
		</pre>
	</body>
</html>