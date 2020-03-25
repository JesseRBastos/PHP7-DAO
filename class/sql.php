<?php 
/**
 * Acessando MySql via PDO -> class Sql
 */

class Sql extends PDO {

	private $conn;

	public function __construct()	
	{
		$this->conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
	}	

	private function setParams($statements, $parameters = array()) {
		foreach ($parameters as $key => $value) {
			$this->setParam($statements, $key, $value);
		}
	}

	private function setParam($statements, $key, $value) {
		$statements->bindParam($key, $value);
	}

	public function query($rawQuery, $params = array()){
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt, $params);
		$stmt->execute();
		return $stmt;
	}

	public function select($rawQuery, $parameters=array()):array {
		$stmt = $this->query($rawQuery, $parameters);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}

 ?>