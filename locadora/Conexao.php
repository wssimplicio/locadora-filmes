<?php
//---------------------------------- Dados para com o servidor MySQL------------------
  $servidor ="localhost"; 
  //Endereço do servidor (DNS ou IP direto)
  
  $usuario ="wagner"; 
  //Nome do usuario de acesso ao aservidor

  $senha ="";
  //senha do usuario de acesso ao servidor 
  
  $banco ="dblocadora";
  //Nome do banco de dados que será manipulado

  //---------------------Executa a conexão com o servidor --------------------------------
  $conexao = mysql_connect($servidor,$usuario,$senha) or die
  ("não foi possivel conecyar-se ao servidor. Erro:" . mysql_error());

  $selecao = mysql_select_db($banco) or die 
  (" Não foi possivel conectar-se ao banco. Erro: ". mysql_error());

  /*Verifica se houve conexao com o banco de dados no servidor  mostra na tela.*/
   if(isset($selecao)) {
   echo "Banco de dados selecionado com sucesso.";}
    ?>