<!DOCTYPE html>
<html>
<head>
	<title>formulario</title>
</head>
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
			width: 200px;
			height: 70px;
			font-size: 30pt;
			text-align: center;
		}
		
		
	</style>
<body>
<div id="opn">
    <form action="dados.php" method="POST">
    	Nome: <input type="text" name="nome"><br>
    	Senha: <input type="password" name="senha"><br>
    	<input type="submit" name="enviar">
    </form>
</div>
</body>
</html>