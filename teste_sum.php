<?php 


echo "MySQL & PHP7 - Teste Sored Procedure: test_proc <hr>";
//* Conectando ao Bamco
$mysqli = new mysqli("localhost", "root", "", "dbphp7");
if ($mysqli->connect_error) {
	echo "Error: ". $mysqli->connect_error;
} else {
	// echo "Conecção OK!";
}

$procInput1 = 123;
$procInput2 = 456;
$procInput3 = 789;

$call = mysqli_prepare($mysqli, 'CALL test_proc(?, ?, ?, @sum, @product, @average)');
mysqli_stmt_bind_param($call, 'iii', $procInput1, $procInput2, $procInput3);
mysqli_stmt_execute($call);

$select = mysqli_query($mysqli, 'SELECT @sum, @product, @average');
$result = mysqli_fetch_assoc($select);
$procOutput_sum     = $result['@sum'];
$procOutput_product = $result['@product'];
$procOutput_average = $result['@average'];
echo "<br>Sum___ : ". $procOutput_sum ;
echo "<br>product_ : ".$procOutput_product;
echo "<br>Average_ : ".$procOutput_average;

 ?>