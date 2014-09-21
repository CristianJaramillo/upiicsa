{{-- APLICATION REGISTER --}}
@section('app')
	
	<div class="container" style="margin-top:52px;">
		
		<h1>Estudio por individuo</h1>

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
			                <a href="" class="btn btn-info">
			                    Ver
			                </a>
			            </td>
			        </tr>
			    @endforeach

			</tbody>

		</table>	
	</div>

@endsection