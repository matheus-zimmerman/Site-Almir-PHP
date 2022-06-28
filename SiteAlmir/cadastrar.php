<?php
// arquivo de cadastro
/*include "connect.php";*/
$nome 		= 	$_POST['nome'];
$email 		= 	$_POST['email'];
$senha 		= 	$_POST['senha'];
$resenha	=	$_POST['repetesenha'];
$lembrete	=	$_POST['lembrete'];
$foto		=	$_FILES['foto']['name'];
$tipo		=	$_FILES['foto']['type'];

/*
echo "Nome: $nome<br>";
echo "E-mail: $email<br>";
echo "Senha: $senha<br>";
echo "Repetiçao da senha: $resenha<br>";
echo "Lembrete: $lembrete<br>";
echo "Foto: $foto<br>";
echo "Tipo: $tipo<br>";
*/

$registro = false;
if($nome != "" && $email != "" && $senha != "" && $lembrete !=""  ){
	  if($senha != $resenha){
       echo "<script>alert('Senhas diferentes');window.history.go(-1);</script>";
   }else{
   	   $registro = true;

   }
}else {

   echo "<script>alert('É necessario preencher todos os campos');window.history.go(-1);</script>";
}

$sql = mysqli_query($link,"SELECT * FROM tb_user order by id_user desc limit 1");
while($line = mysqli_fetch_array($sql)){
      $id = $line['id_user'];

}

echo $id;

?>