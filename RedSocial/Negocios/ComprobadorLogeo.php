<?php
session_start();
?>
<?php
echo 'Bienvenido, ';
if (isset($_SESSION['k_username'])) {
	echo '<b>'.$_SESSION['k_username'].'</b>.';
	echo '<p><a href="muro.php">Muro</a></p>';
    echo '<p><a href="logout.php">Salir</a></p>';
        
}else{
	header("Location: http://localhost/RedSocial/index.php");
        
}