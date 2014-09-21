{{-- APLICATION CARRERA --}}
@section('app')

	<h1>{{ $category->name }}</h1>

	<table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Sexo</th>
                <th>Organizaci&oacute;</th>
                <th>Ver</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category->users as $user)
                <tr>
                   	<td>{{ $user->full_name }}</td>
                	<td>{{ $user->email }}</td>
                	<td>{{ $user->sex }}</td>
                    <td>{{{ $user->question_1 }}}</td>
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