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

	private function setParams($statments, $parameters = array()) {
		foreach ($parameters as $key => $value) {
			$stmt->bindParam($key, $value);
		}
	}

	private function setParam($statments, $key, $value) {
		$statments->bindParam($key, $value);
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