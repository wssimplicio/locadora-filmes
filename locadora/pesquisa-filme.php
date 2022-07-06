<?php
	include("conexao.php");
	if(isset($_GET["pesquisa"])) {
		$pesquisa = $_GET["pesquisa"];
	}else{
		$pesquisa = "";
	}
?>
<!doctype html>
<html>
    <head>
		<meta charset="ISO-8851-1">
		<title>Pesquisar Filmes</title>
    </head>
	<style type="text/css">
.fundo{
   background-image: url(fundo8.jpg);
   background-repeat:  no-repeat;
   background-size: cover;
   
   }
</style>
	<body class="fundo">
		<h1>Pesquisa de Filmes</h1>
		<form name="pesquisa" action="pesquisa-filme.php" method = "get">
			<label>Pesquisa de Filmes:</label> <input type="text" name="pesquisa" />
			<input type="submit" value="pesquisar" />
		</form>
		<h2>Resultados</h2>
		<?php
		     
			$sql = "select titulofilme, nomeCategoria
					  from tbfilmes
					 inner join tbcategorias on tbfilmes.idCategoria = tbcategorias.idCategoria
					 where titulofilme like '%$pesquisa%'";
			//echo $sql;
			$sqlRegistros = mysql_query($sql);
			$num_linhas = mysql_num_rows($sqlRegistros);
			echo "<table border='1'>";
			echo "<tr><th>Título do Filme</th><th>Categoria</th></tr>";

			for ($i=0;$i<$num_linhas;$i++){

				$dados = mysql_fetch_array($sqlRegistros);

				$titulofilme = $dados ["titulofilme"];
				$nomeCategoria = $dados ["nomeCategoria"];

				echo "<tr><td>$titulofilme</td><td>$nomeCategoria</td></tr>";
				/* outra forma de fazer :
				printf('<tr><td>%s</td><td>%s</td></tr>',
						$tituloFilme,
						$nomeCategoria);
				*/
			}
			echo "</table>";
		?>
	</body>
</html>