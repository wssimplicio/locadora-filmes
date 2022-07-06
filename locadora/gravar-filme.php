<?php
 include("Conexao.php");

 $titulofilme      = $_POST ["titulofilme"];
 $duracaoFilme        = $_POST ["duracaoFilme"];
 $valorlocacao       = $_POST ["valorlocacao"];
 $idcategoria     = $_POST ["idcategoria"];
 

 $sql = "insert into tbfilmes
               (titulofilme,duracaoFilme,valorlocacao,idcategoria,) 
         value 
               ('$titulofilme','$duracaoFilme','$valorlocacao','$idcategoria')";

 $sqlGravarCadastro = mysql_query ($sql) or die ("Erro ao gravar registro." . mysql_error());
  
 //header('Location: ..\Pagina inicial\Pagina Inicial.html');

 ?>