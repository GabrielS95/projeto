<?php
	session_start();
	//Conectando banco de dados
	$mysqli = new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
	//Click do mouse sobre botão salvar
		if(isset($_GET['aluga'])){
			$id = $_GET['aluga'];

			$mysqli->query("UPDATE base SET stat='Alugado' WHERE id=$id") or die($mysqli->error());
		}
?>
