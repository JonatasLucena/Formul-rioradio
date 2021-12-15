<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form method="POST" action="valida.php">
<fieldset>
	<legend>
		Tipo 'radio' escolha uma opção entre várias - campo "name" é igual em todas as pções
	</legend>
	<p>
		<input type="radio" name="ComidaPref" value="Arroz com Feijão e Carne">
		<label for="ComidaPref"> Arroz com Feijão e Carne</label>
	</p>
	<p>
		<input type="radio" name="ComidaPref" value="Arroz com Macarrão e Carne">
		<label for="ComidaPref"> Arroz com Macarrão e Carne</label>
	</p>
	<p>
		<input type="radio" name="ComidaPref" value="Baião e Carne">
		<label for="ComidaPref"> Baião e Carne</label>
	</p>
	<p>
		<input type="radio" name="ComidaPref" value="Baião, Salada e Ovo">
		<label for="ComidaPref"> Baião, Salada e Ovo</label>
	</p>
</fieldset>	
<button type="submit">Enviar Resposta</button>
</form>
</body>
</html>