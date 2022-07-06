<?php
 include("Conexao.php");

 $codigo           = $_POST ["codigo"];
 $titulofilme      = $_POST ["titulofilme"];
 $duracaofilme     = $_POST ["duracaofilme"];
 $valorlocacao     = $_POST ["valorlocacao"];
 $idcategoria      = $_POST ["idcategoria"];

      $sql = "UPDATE tbfilmes
				SET titulofilme='$titulofilme', duracaofilme='$duracaofilme',
				valorlocacao=$valorlocacao,idcategoria='$idcategoria'
			 WHERE idfilme=$codigo;";


 $sqlGravarCadastro = mysql_query ($sql) or die ("Erro ao atualizar registro." . mysql_error());

  header('Location: menu.php');

 ?>