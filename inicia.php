<!DOCTYPE html>
<html lang="pt-br">
<head>
	<style>
body{
  background-color: cyan
}
	</style>
	<meta charset="utf-8">
	<title>capa</title>
</head>
<body>
	<center>
	<h1>enviar arquivo aqui</h1>
		<form action="files.php" enctype="multipart/form-data" method="post">
	<p>nome: <input type="text" name="nome"></p>
	<p>cidade: <input type="text" name="cidade"></p>
	<P>imagem: <input type="file" name="imagem"></P>
<button type="submit"> enviar </button>
</center>
	</form>
</body>
</html>