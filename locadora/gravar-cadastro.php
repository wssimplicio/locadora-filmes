<?php
 include("Conexao.php");

 $Nome      = $_POST ["Nome"];
 $RG        = $_POST ["RG"];
 $CPF       = $_POST ["CPF"];
 $Idade     = $_POST ["Idade"];
 $DatadeNascimento      = $_POST ["DatadeNascimento"];
 $EMail     = $_POST ["EMail"];
 $CEP       = $_POST ["CEP"];
 $Endereco  = $_POST ["Endereco"];
 $Bairro    = $_POST ["Bairro"];
 $Cidade    = $_POST ["Cidade"];
 $Estado    = $_POST ["Estado"];
 $Telefone  = $_POST ["Telefone"];
 $Celular   = $_POST ["Celular"];

 $sql = "insert into tbcadastro
               (Nome,RG,CPF,Idade,DatadeNascimento,EMail,CEP,Endereco,Bairro,Cidade,Estado,Telefone,Celular) 
         value 
               ('$Nome','$RG','$CPF','$Idade','$DatadeNascimento','$EMail','$CEP','$Endereco','$Bairro','$Cidade','$Estado','$Telefone','$Celular')";

 $sqlGravarCadastro = mysql_query ($sql) or die ("Erro ao gravar registro." . mysql_error());
  
 header('Location: ..\Pagina inicial\Pagina Inicial.html');

 ?>