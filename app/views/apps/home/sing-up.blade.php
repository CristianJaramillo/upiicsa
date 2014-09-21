{{-- APLICATION REGISTER --}}
@section('app')
	<div class="row">
		<div class="col-md-2"></div>
		{{ Form::open(['class' => 'form-horizontal col-md-8', 'id' => 'sing-up', 'method' => 'POST', 'role' => 'form', 'route' => 'register']) }}
			<fieldset>
				<legend><h1>Registro</h1></legend>
				{{-- MESSAGE --}}
				@if (Session::has('message'))
					<div class="alert alert-success col-xs-12 col-sm-6 col-md-7" role="alert">{{ \Lang::get('utils.message.register-sucess') }}
					</div>
				@endif

				{{-- FULL NAME --}}
				{{ Field::text('full_name', NULL, ['id' => 'full_name', 'pattern' => '[A-Za-z ]{3,50}','title' => 'Escriba su nombre', 'required']) }}
				{{-- EMAIL --}}
				{{ Field::email('email', NULL, ['id' => 'email', 'pattern' => '{4,320}', 'required']) }}
				{{-- CONFIRM EMAIL --}}
				{{ Field::email('email_confirmation', NULL,['id' => 'email_confirmation', 'pattern' => '{4,320}', 'required']) }}
				{{-- SEX --}}
				{{ Field::select('sex', ['F' => 'Femenino','M' => 'Masculino'], NULL, ['id' => 'sex', 'required']) }}
				{{-- TEAM --}}
				{{ Field::select('team', ['1' => 'Equipo 1', '2' => 'Equipo 2', '3' => 'Equipo 3', '4' => 'Equipo 4', '5' => 'Equipo 5', '6' => 'Equipo 6', '7' => 'Equipo 7', '8' => 'Equipo 8'], NULL, ['id' => 'team', 'required']) }}
				{{-- CATEGORY --}}
				{{ Field::select('category_id', $categories, NULL, ['id' => 'category_id', 'required']) }}
				{{-- QUESTION-1 --}}
				{{ Field::textarea('question_1', NULL, ['rows' => '3', 'pattern' => '[A-Za-z0-9 ]{50,200}', 'title' => 'Escribe almenos 50 car&aacute;cteres','required']) }}
				{{-- QUESTION-2 --}}
				{{ Field::select('question_2', ['Lider' => 'Lider', 'Cerebro' => 'Cerebro', 'Investigador' => 'Investigador', 'Iniciador' => 'Iniciador', 'Segidor' => 'Segidor', 'Ninguno' => 'Ninguno'], NULL, ['required']) }}
				{{-- QUESTION-3 --}}
				{{ Field::select('question_3', ['Siempre' => 'Siempre', 'Constantemente' => 'Constantemente', 'Eventualmente' => 'Eventualmente', 'Poco' => 'Poco', 'Nunca' => 'Nunca'], NULL, ['required']) }}
				{{-- QUESTION-4 --}}
				{{ Field::select('question_4', ['Si' => 'Si', 'No' => 'No'], NULL, ['required']) }}
				{{-- QUESTION-5 --}}
				{{ Field::textarea('question_5', NULL, ['rows' => '3', 'pattern' => '[A-Za-z0-9 ]{50,200}', 'title' => 'Escribe almenos 50 car&aacute;cteres','required']) }}
				{{-- QUESTION-6 --}}
				{{ Field::select('question_6', ['Facebook' => 'Facebook', 'Whatsapp' => 'Whatsapp', 'Twitter' => 'Twitter', 'Correo Electrónico' => 'Correo Electrónico', 'Skype' => 'Skype', 'Ninguno' => 'Ninguno'], NULL, ['required']) }}
				{{-- QUESTION-7 --}}
				{{ Field::select('question_7', ['Word' => 'Word', 'PowerPoint' => 'PowerPoint', 'Excel' => 'Excel', 'Ninguno' => 'Ninguno'], NULL, ['required']) }}
				{{-- QUESTION-8 --}}
				{{ Field::select('question_8', ['Si' => 'Si', 'No' => 'No'], NULL, ['required']) }}
				{{-- QUESTION-9 --}}
				{{ Field::select('question_9', ['Siempre' => 'Siempre', 'Constantemente' => 'Constantemente', 'Eventualmente' => 'Eventualmente', 'Poco' => 'Poco', 'Nunca' => 'Nunca'], NULL, ['required']) }}
				{{-- QUESTION-10 --}}
				{{ Field::select('question_10', ['Siempre' => 'Siempre', 'Constantemente' => 'Constantemente', 'Eventualmente' => 'Eventualmente', 'Poco' => 'Poco', 'Nunca' => 'Nunca'], NULL, ['required']) }}
				{{-- SUBMIT --}}
				<div class="col-xs-12 col-sm-6 col-md-7">
					<div class="form-group">
						<input class="btn btn-primary btn-lg" type="submit" value="Ingresar"/>
					</div>
				</div>
			</fieldset>
		{{ Form::close() }}

		<div class="col-md-2"></div>
	</div>
	
@endsection