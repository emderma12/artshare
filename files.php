<?php
var_dump($_FILES);

$ima = $_FILES['imagem']['tmp_name'];
$name = $_FILES['imagem']['name'];

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$dataTime = date("d-m-Y H-i");

$dados = $nome." - ".$cidade." - ".$dataTime;
$oush = pathinfo($name);
$extencao = $oush['extension'];

$exten = array("png","PNG","jpg","jpeg","gif","svg");

if (in_array($extencao, $exten)) {
	move_uploaded_file($ima, "trabalho Artshare/".$dados."-".$extencao);
	echo "<br> Arquivo enviado";
}else{
	echo "<br> Extensão invalida";
}
