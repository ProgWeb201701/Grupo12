<?php
/*
	classe de conexão com o banco, executas as consultas no banco de dados
*/
class Banco{

	/**
	* @nome: executaQuery
	* @var: $sql = query string para consulta no banco
	* @desc: excutar um query junto ao banco de dados
	* @return: true/false = para insert/delete 
	* @return: rows/row para update ou select com as linhas  
	*  a fetadas
	*/

private $servername = "localhost";
private $username = "root";
 private $password = "1030";
 private $dbname = "revistaart";










//Cria conexao com banco
	public function executaQuery($sql){
		$mysqli = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

		if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
		} 
 
		$mysqli->close();
		return $result;
	}



	public function escapeString($string){
		$mysqli = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if ($mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			die();
		}
		$string = $mysqli->real_escape_string($string);
		$mysqli->close();
		return $string;
	}


}