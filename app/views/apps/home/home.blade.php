{{-- APLICATION HOME --}}
@section('app')
	<div class="jumbotron">
        <div class="container bg">
            <h1>Organización</h1>
            <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            <p>
                <a href="{{ route('home') }}" class="btn btn-primary btn-lg" role="button">
                    Postúlate &raquo;
                </a>
            </p>
        </div>
    </div> 
    <h2>&Uacute;ltimos Alumnos</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Carrera</th>
                <th>Organizaci&oacute;</th>
                <th>Ver</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($last_users as $user)
                <tr>
                   <td>{{ $user->full_name }}</td>
                        <td>{{ $user->category->name }}</td>
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