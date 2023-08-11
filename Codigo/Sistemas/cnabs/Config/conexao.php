<?php 
//Dados para a conexcão do banco de dados 
require_once("config.php");

 date_default_timezone_set('America/Sao_Paulo');

 try {
       $pdoBD = new PDO("mysql:dbmane=$bancoBD_Oficina; host=$servidor_Oficina; charset=utf8", "$usuario_Oficina", "$senha_Oficina");

       //Conexão para backup do banco de dados
       //conn = mysql_connect($servidorBD_Oficina, $usuario_Oficina, $senha_Oficina, $banco_Oficina);
 }
catch (Exception $ErroBD){
  echo "Erro de conexão banco de dados!: " .$ErroBD;   
}

?>