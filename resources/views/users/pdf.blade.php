<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Todos los Usuarios</title>
	<style>
		table {
			border: 1px solid #aaa;
			border-collapse: collapse;
		}
		table th, table td {
			font-family: sans-serif;
			font-size: 10px;
			border: 1px solid #ccc;
			padding: 4px;
		}
		table tr:nth-child(odd) {
			background-color: #eee;
		}
		table th {
			background-color: #666;
			color: #fff;
			text-align: center;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre Completo</th>
				<th>Tipo de Documento</th>
				<th>Número de Documento</th>
				<th>Correo Electrónico</th>
				<th>Rol</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->fullname }}</td>
					<td>{{ $user->document_type}}</td>
					<td>{{ $user->num_document}}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->role }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>