<?php
	include("conexao.php");
	
	if(isset($_GET["nome"])) {
		$nome = $_GET["nome"];
	}else{
		$nome = "";
	}
?>
<!doctype html>
<html>
    <head>
		<meta charset="ISO-8851-1">
		<title>Pesquisar Cadastros</title>
    </head>
	<style type="text/css">
.fundo{
   background-image: url(fundo8.jpg);
   background-repeat:  no-repeat;
   background-size: cover;
   
   }
</style>
	<body class="fundo">
		<h1>Pesquisa de </h1>
		<form name="formPesquisa" action="pesquisa-cadatro.php" method = "get">
			<label>Pesquisa de Nome:</label> <input type="text" name="nome" />
			<input type="submit" value="pesquisar" />
		</form>
		<h2>Resultados</h2>
		<?php
			$sql = "select * from tbcadastro					 
					 where Nome like '%$nome%'";
			//echo $sql;
			$sqlRegistros = mysql_query($sql);
			$num_linhas = mysql_num_rows($sqlRegistros);
			echo "<table border='1'>";
			echo "<tr><th>Nome</th> <th>RG</th> <th>CPF</th> <th>Idade</th> <th>Data de Nascimento</th> 
	<th>E-Mail</th> <th>CEP</th> <th>Endereço</th> <th>Bairro</th> <th>Cidade</th>
	<th>Estado</th> <th>Telefone</th> <th>Celular</th></th></tr>";

			for ($i=0;$i<$num_linhas;$i++){

				$dados = mysql_fetch_array($sqlRegistros);

				$Nome             = $dados['Nome'];
		        $RG               = $dados['RG'];
		        $CPF              = $dados['CPF'];
		        $Idade            = $dados['Idade'];
		        $DatadeNascimento = $dados['DatadeNascimento'];
		        $EMail            = $dados['EMail'];
		        $CEP              = $dados['CEP'];
		        $Endereco         = $dados['Endereco'];
		        $Bairro           = $dados['Bairro'];
		        $Cidade           = $dados['Cidade'];
		        $Estado           = $dados['Estado'];
		        $Telefone         = $dados['Telefone'];
		        $Celular          = $dados['Celular'];

				echo "<tr><td>$Nome</td><td>$RG</td><td> $CPF</td><td> Idade: $Idade</td><td> $DatadeNascimento</td><td> 
		 $EMail </td><td>$CEP </td><td>$Endereco</td><td>  $Bairro</td><td> $Cidade</td><td> $Estado</td><td>
		 $Telefone</td><td>$Celular</td></tr>";
				
			}
			echo "</table>";
		?>
	</body>
</html>