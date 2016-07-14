<?php
if($maintenance_opt==true || $maintenance_opt==1){
echo<<<END
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="UTF-8">
			<title>PRZERWA TECHNICZNA</title>
		</head>
		<body>
			<center><h1>Przepraszamy! W chwili obecnej trwa przerwa techniczna! Przepraszamy za utrudnienia i zapraszamy w innym terminie!</h1><br></center>
		</body>
		</html>
END;
}
?>