<?php
 
 include ("Conexao.php");
 
  $Usuario = $_POST['Usuario'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM tbusuario WHERE Usuario ='$Usuario' AND senha= '$senha';";
  $q = mysql_query($sql);
  if(mysql_fetch_array($q)) {

     header('Location: menu.php');

  } else {  
     die('Usuario ou Senha invalida');
  }

 ?>