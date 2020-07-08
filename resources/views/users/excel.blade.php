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