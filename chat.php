<?php
$cnx = mysqli_connect("localhost", "root", "", "projeto");

if (!$cnx) {
 echo("Connect failed: " . mysqli_connect_error());
}else{
	echo "deu certo !!!!!";
}
?>
<form method="POST" action="chat.php">	
	<input type="text" name="texto">
	<input type="submit" value="Enviar">
</form>

<?php  
if (!empty($_POST)) {
	echo $_POST["texto"];
}
?>