<?php 
//Conexão de banco de dados 
require_once("config.php");

date_default_timezone_set('America/Sao_Paulo');

try{
	$pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
//Conexão mysql para backups
    //$conn = mysqli_connect($servidor, $usuario, $senha, $banco)	
}
catch (Exeption $e) {
//Condição para tratar o erro de conexão do banco de dados
	echo "Erro ao conectar o banco de dados! " . $e;

}

?>