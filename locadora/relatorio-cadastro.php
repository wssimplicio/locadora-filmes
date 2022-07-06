<html>
<head>
<title>RELATORIO</title>
</head>
<style type="text/css">
.fundo{
   background-image: url(fundo8.jpg);
   background-repeat:  no-repeat;
   background-size: cover;
   
   }
</style>
<body class="fundo">

<?php
	include("conexao.php");
    include ("menu.php");
	echo "<h1> Relatorio de Registro de Cadastro </h1>";

	$sqlRegistro = mysql_query("select * from tbfilmes");
	$num_linhas = mysql_num_rows ($sqlRegistro); 
	//retorna para a variavel o numero total de linhas contendo registros.

	
	$sql = "SELECT * FROM tbcadastro;";
	$rs = mysql_query($sql);
	$num_linhas = mysql_num_rows ($rs);
	
	echo "<table border='1'>";
    echo "<tr><td>Código</td><th>Nome</th> <th>RG</th> <th>CPF</th> <th>Idade</th> <th>Data de Nascimento</th> 
	<th>E-Mail</th> <th>CEP</th> <th>Endereço</th> <th>Bairro</th> <th>Cidade</th>
	<th>Estado</th> <th>Telefone</th> <th>Celular</th></th></tr>";
			
	while($dados = mysql_fetch_array($rs)){
	    $codigo           = $dados['codigo'];
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
		
		echo "<tr><td>$codigo</td><td>$Nome</td><td>$RG</td><td> $CPF</td><td> Idade: $Idade</td><td> $DatadeNascimento</td><td> 
		 $EMail </td><td>$CEP </td><td>$Endereco</td><td>  $Bairro</td><td> $Cidade</td><td> $Estado</td><td>
		 $Telefone</td><td>$Celular</td></tr>" ;
	}
	echo "</table>";
	echo "Total registros : $num_linhas" ;
?>
</body>
</html>