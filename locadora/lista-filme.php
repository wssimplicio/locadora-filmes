 <?php
  include("conexao.php");
 ?>
 <!doctype html>
 <html>
  <head>
  <meta charset="ISO-8851-1">
   <title>Lista de Filmes</title>
    </head>
	<style type="text/css">
.fundo{
   background-image: url(fundo8.jpg);
   background-repeat:  no-repeat;
   background-size: cover;
   
   }
</style>
  <body class="fundo">

  <h1>Lista de Filmes</h1>
  <form name="pesquisa" action="pesquisa-filme.php">
			<input type="submit" value="Pesquisar" />
		</form>
  
  <?php
  include ("menu.php");
     $sqlRegistros = mysql_query("select * from tbfilmes");
     $num_linhas = mysql_num_rows($sqlRegistros);
	 
    //----------------Inicio da Tabela----------------------------------------------
  echo "<table border='1'>";
   //-------------------------Linhas de cabeçalhos da tabela ----------------------
          echo "<tr><th>Código</th><th>Título</th><th>Duração</th><th>Valor da Locação</
 th><th>Cod.categorias</th></tr>";
  //---------------------------------------------------------------------------------
    for($i=0;$i<$num_linhas;$i++){
           $dados = mysql_fetch_array($sqlRegistros);
           $idfilme = $dados ["idfilme"];
           $titulofilme = $dados ["titulofilme"];
           $duracaoFilme = $dados ["duracaoFilme"];
           $valorlocacao = $dados ["valorlocacao"];
           $idcategoria = $dados ["idcategoria"];
  //------------------------------Linhas da tabela contendo os registros ---------------
   echo "
         <tr>
         <td>$idfilme</td>
         <td>$titulofilme</td>
         <td>$duracaoFilme</td>
         <td>$valorlocacao</td>
         <td>$idcategoria</td>
         </tr>";
  }
    echo "</table>"; 
?>
</body>
</html>