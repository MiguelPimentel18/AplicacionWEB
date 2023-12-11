<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consultas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

	<div>
		<h1><?= $titulo ?></h1>
	</div>

	<div class="container">
		<table class="table table-justify table-stripped table-hover">
			<thead>
				<th>Noticia</th>
				<th>Contenido de la noticia</th>
			</thead>
			<tbody>
				<?php foreach($noticias as $noticia): ?>
					<tr>
						<td><?= $noticia['title'] ?></td>
						<td><?= $noticia['body'] ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>
				<th>Noticia</th>
				<th>Contenido de la noticia</th>
			</tfoot>
		</table>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>