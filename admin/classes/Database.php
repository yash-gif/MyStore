<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost:3308", "root", "", "store_db");
		return $this->con;
	}
}

?>