{{-- APLICATION REGISTER --}}
@section('app')
	<h1>Registros</h1>

		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nombre Completo</th>
					<th>Correo Electronico</th>
					<th>Carrera</th>
					<th>Equipo</th>
					<th>Ver</th>
				</tr>
			</thead>

			<tbody>
				
				@foreach ($users as $user)
			        <tr>
			            <td>{{ $user->full_name }}</td>
			            <td>{{ $user->email }}</td>
			            <td>{{ $user->category->name }}</td>
			            <td>Equipo {{ $user->team }}</td>
			            <td width="50">
                            <a href="{{ route('user', [\Str::slug($user->full_name), $user->id]) }}" class="btn btn-primary">
                                Ver
                            </a>
                        </td>
			        </tr>
			    @endforeach

			</tbody>

		</table>	
@endsection