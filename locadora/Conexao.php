<?php
//---------------------------------- Dados para com o servidor MySQL------------------
  $servidor ="localhost"; 
  //Endere�o do servidor (DNS ou IP direto)
  
  $usuario ="wagner"; 
  //Nome do usuario de acesso ao aservidor

  $senha ="";
  //senha do usuario de acesso ao servidor 
  
  $banco ="dblocadora";
  //Nome do banco de dados que ser� manipulado

  //---------------------Executa a conex�o com o servidor --------------------------------
  $conexao = mysql_connect($servidor,$usuario,$senha) or die
  ("n�o foi possivel conecyar-se ao servidor. Erro:" . mysql_error());

  $selecao = mysql_select_db($banco) or die 
  (" N�o foi possivel conectar-se ao banco. Erro: ". mysql_error());

  /*Verifica se houve conexao com o banco de dados no servidor  mostra na tela.*/
   if(isset($selecao)) {
   echo "Banco de dados selecionado com sucesso.";}
    ?>