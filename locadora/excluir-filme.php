<?php
 include("Conexao.php");

 $codigo = $_POST ["codigo"];
 
  $sql = " DELETE FROM tbfilmes WHERE idfilme = ".$codigo."";
 
 $sqlExcluirCadastro = mysql_query($sql) or die ("Erro ao excluir registro." . mysql_error());;
 
  header('Location: menu.php');
 
 ?>