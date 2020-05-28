<?php
    include('conection.php');
	$email = $_POST['email'];
    $sug = $_POST['sug'];
    
	$SQLinserir = "INSERT INTO sugestoes (email, sug) VALUES ('$email','$sug')";
	$resultado = mysqli_query($conn, $SQLinserir) or die ("Falha na execução de inserção dos dados");
	echo "Sugestão enviada com sucesso!"; 
?>