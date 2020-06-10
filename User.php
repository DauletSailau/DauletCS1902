<?php

class DBC{
	private $username;
	private $servername;
	private $password;
	private $dbname;
	private $charset;
	
	public function connect(){
		$this->servername='localhost';
		$this->username='week_5';
		$this->password='12345';
		$this->dbname='week10';	
		$this->charset='utf8mb4';
try{
	$dsn="mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
		$pdo= new PDO($dsn,$this->username, $this->password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $pdo;
}catch(PDOException $e){
	echo "Connection failed: ".$e->getMessage();
}

		
	}
	
	
}

class User extends DBC{
	 
	public function getAllUsers(){
	$stmt=$this->connect()->query("Select * from clients");
	while($row=$stmt->fetch()){
		
		$uid=$row['Name'];
		
		return $uid;
	}
}	
}


?>