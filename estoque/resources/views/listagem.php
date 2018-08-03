<!DOCTYPE html>
<html>
<head>
	<title>Controle de estoque</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">

</head>
<body>

	<div class="container">
		<h1>Listagem de produtos</h1>	
		<table class="table" cellpadding="10" cellspacing="10">

		<?php foreach ($produtos as $p): ?>
				<tr>
						<td><?= $p->nome ?></td>
						<td><?= $p->valor ?></td>
						<td><?= $p->descricao ?></td>
						<td><?= $p->quantidade ?></td>
						<td>
							<a href="/produtos/mostra?id=<?=$p->id?>">Vizualizar</a>
						</td>

				</tr>
		<?php endforeach ?>
		</table>

	</div>
</body>
</html>