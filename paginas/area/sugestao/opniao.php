<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>

	<style type="text/css">
		body{
			background-color: #ecf0f1;
		}
		#opn{
			background-color: #2c3e50;
			font-size: 30pt;
			color: white;
			font-weight: 'arial';
			text-align: center;
			box-shadow: 5px 5px 5px black;
			border-radius: 15px;
		}
		input{
			width: 70%;
			height: 70px;
			font-size: 30pt;
		}
		textarea{
			width: 70%;
			font-size: 25pt;
		}
		button{
			width: 100px%;
			height: 60px;
			font-size: 100%;
		}
	</style>
</head>
<body>

<div id="opn">
	<form action="amz.php" method="POST">
		Nome:<br><input type="text" name="nome" min='1' max='30'><br>
		Texto:<br><textarea min='1' max='255' name="texto" rows="5" placeholder="Minhas sugestões para o site são:"></textarea><br>
		<button type="submit" name="enviar">Enviar</button><br>
	</form>
</div>
</body>
</html>