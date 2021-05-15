<?php 

class Database 
{
	private $con;

	public function connect() 
	{
		$this->con = new mysqli("localhost", "root", "", "dummy");
		return $this->con;
	}
}


?>