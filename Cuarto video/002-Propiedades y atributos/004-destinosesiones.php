<?php
	session_start();
	echo "Tu edad es de ".$_SESSION['edad']." años";
	echo "Tu nombre es ".$_SESSION['nombre'];
?>
