<?php
class MysqlConnector {
	private $host;
	private $username;
	private $pass;
	private $database;
	private $con;
    public function __construct(){
		$this->host = "localhost";
		$this->username = "root";
		$this->pass = "";
		$this->database = "pokewebdb";

		ob_start();
		error_reporting(E_ALL & ~E_NOTICE);
		ini_set('display_errors', 0);
		ini_set('log_errors', 1);
		$this->con = mysqli_connect($this->host, $this->username, $this->pass, $this->database);
		if($this->con->connect_errno)
        {
            die ("database connection failed".$this->con->connect_errno);
        }
        mysqli_set_charset($this->con, "utf8");
	}

	public function consultaSimple($sql){

		try{
			return mysqli_query($this->con,$sql);
			
		}catch(Exception $e){
			throw new Exception($e->getMessage());
		}
		
	}

	public function consultaRetorno($sql){
		try{
			return mysqli_query($this->con,$sql);
		}catch(Exception $e){
			throw new Exception($e->getMessage());
		}

	}
}
