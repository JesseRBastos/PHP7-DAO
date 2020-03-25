<?php 
/**
 * Autoload de Classes
 */
$timezones = array(
'AC' => 'America/Rio_branco',   'AL' => 'America/Maceio',
'AP' => 'America/Belem',        'AM' => 'America/Manaus',
'BA' => 'America/Bahia',        'CE' => 'America/Fortaleza',
'DF' => 'America/Sao_Paulo',    'ES' => 'America/Sao_Paulo',
'GO' => 'America/Sao_Paulo',    'MA' => 'America/Fortaleza',
'MT' => 'America/Cuiaba',       'MS' => 'America/Campo_Grande',
'MG' => 'America/Sao_Paulo',    'PR' => 'America/Sao_Paulo',
'PB' => 'America/Fortaleza',    'PA' => 'America/Belem',
'PE' => 'America/Recife',       'PI' => 'America/Fortaleza',
'RJ' => 'America/Sao_Paulo',    'RN' => 'America/Fortaleza',
'RS' => 'America/Sao_Paulo',    'RO' => 'America/Porto_Velho',
'RR' => 'America/Boa_Vista',    'SC' => 'America/Sao_Paulo',
'SE' => 'America/Maceio',       'SP' => 'America/Sao_Paulo',
'TO' => 'America/Araguaia',    
);

date_default_timezone_set('America/Sao_Paulo');
//$str = strftime('%A, %d de %B de %Y ', strtotime('today'));
//echo utf8_decode($str) ."<br>";
setlocale(LC_ALL,"pt_BR", "pt_BR.utf-8","ptb");
echo date("l d/m/Y H:i:s")."<hr>";
echo " Autoload > <br>";
spl_autoload_register(function($class_name) {

	 echo " ________ > ". $class_name . "<br>";

	$filename = "class". DIRECTORY_SEPARATOR . $class_name . ".php";

	if (file_exists($filename)) {

		echo "Require: < $filename > <br>";
		require_once($filename);

	}


});


 ?>