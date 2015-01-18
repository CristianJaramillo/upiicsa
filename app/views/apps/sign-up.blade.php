@section('app')
		<!-- Section: #CONTACT -->
		<section id="contact" class="home-section text-center">
			<div class="heading-contact marginbot-50">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">

							<div class="section-heading">
								<h1>Organización.</h1>
								<p class="text-left">
									Deacuerdo a su investigación contestar el siguiente cuestionario de manera invividual, concordando con su apreciación personal durante el trabajo desempeñado en el equipo al que pertenece.
								</p>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="container">

				<div class="row">
					<div class="col-lg-8 col-md-offset-2">
						<div class="boxed-grey">
							
							{{ Form::open(['id' => 'contact-form', 'method' => 'POST', 'role' => 'form']) }}

								<div class="row">

									<div class="col-md-6">
										{{-- FULL NAME --}}
										{{ Field::text('full_name', NULL, ['id' => 'full_name', 'pattern' => '[A-Za-z ]{3,50}','title' => 'Escriba su nombre', 'required', 'placeholder' => 'Juan Hérnandez'], 'default') }}
									</div>
									<div class="col-md-3">
										{{-- SEX --}}
										{{ Field::select('sex', ['F' => 'Femenino','M' => 'Masculino'], NULL, ['id' => 'sex', 'required']) }}
									</div>
									<div class="col-md-3">
										{{-- TEAM --}}
										{{ Field::select('team_id', ['1' => 'Equipo 1', '2' => 'Equipo 2', '3' => 'Equipo 3', '4' => 'Equipo 4', '5' => 'Equipo 5', '6' => 'Equipo 6', '7' => 'Equipo 7', '8' => 'Equipo 8'], NULL, ['id' => 'team', 'required']) }}
									</div>
									
								</div>

								<div class="row">
									
									<div class="col-md-6">
										{{-- EMAIL --}}
										{{ Field::email('email', ['id' => 'email', 'pattern' => '{4,320}', 'required', 'placeholder' => 'juan@ipn.mx'], 'email') }}
									</div>

									<div class="col-md-6">
										{{-- CATEGORY --}}
										{{ Field::select('category_id', $categories, NULL, ['id' => 'category_id', 'required']) }}
									</div>

								</div>

								<div class="row">

									<div class="col-md-6">
										{{-- QUESTION-1 --}}
										{{ Field::textarea('question_1', NULL, ['rows' => '3', 'pattern' => '[A-Za-z0-9 ]{50,200}', 'title' => 'Escribe almenos 50 car&aacute;cteres','required', 'placeholder' => 'La organización es ...']) }}
									</div>

									<div class="col-md-6">
										{{-- QUESTION-2 --}}
										{{ Field::select('question_2', ['Lider' => 'Lider', 'Cerebro' => 'Cerebro', 'Investigador' => 'Investigador', 'Iniciador' => 'Iniciador', 'Segidor' => 'Segidor', 'Ninguno' => 'Ninguno'], NULL, ['required']) }}

									</div>

								</div>

								<div class="row">

									<div class="col-md-6">
										{{-- QUESTION-3 --}}
										{{ Field::select('question_3', ['Siempre' => 'Siempre', 'Constantemente' => 'Constantemente', 'Eventualmente' => 'Eventualmente', 'Poco' => 'Poco', 'Nunca' => 'Nunca'], NULL, ['required']) }}
									</div>

									<div class="col-md-6"> 
										{{-- QUESTION-4 --}}
										{{ Field::select('question_4', ['Si' => 'Si', 'No' => 'No'], NULL, ['required']) }}

									</div>
								
								</div>

								<div class="row">

									<div class="col-md-6">
										{{-- QUESTION-5 --}}
										{{ Field::textarea('question_5', NULL, ['rows' => '3', 'pattern' => '[A-Za-z0-9 ]{50,200}', 'title' => 'Escribe almenos 50 car&aacute;cteres','required', 'placeholder' => 'Ayudan a ...']) }}
									</div>

									<div class="col-md-6"> 
										{{-- QUESTION-6 --}}
										{{ Field::select('question_6', ['Facebook' => 'Facebook', 'Whatsapp' => 'Whatsapp', 'Twitter' => 'Twitter', 'Correo Electrónico' => 'Correo Electrónico', 'Skype' => 'Skype', 'Ninguno' => 'Ninguno'], NULL, ['required']) }}

									</div>
								
								</div>

								<div class="row">

									<div class="col-md-6">
										{{-- QUESTION-7 --}}
										{{ Field::select('question_7', ['Word' => 'Word', 'PowerPoint' => 'PowerPoint', 'Excel' => 'Excel', 'Ninguno' => 'Ninguno'], NULL, ['required']) }}
									</div>
								
									<div class="col-md-6"> 
										{{-- QUESTION-8 --}}
										{{ Field::select('question_8', ['Si' => 'Si', 'No' => 'No'], NULL, ['required']) }}

									</div>

								</div>

								<div class="row">

									<div class="col-md-6">
										{{-- QUESTION-9 --}}
										{{ Field::select('question_9', ['Siempre' => 'Siempre', 'Constantemente' => 'Constantemente', 'Eventualmente' => 'Eventualmente', 'Poco' => 'Poco', 'Nunca' => 'Nunca'], NULL, ['required']) }}	
									</div>

									<div class="col-md-6"> 
										{{-- QUESTION-10 --}}
										{{ Field::select('question_10', ['Siempre' => 'Siempre', 'Constantemente' => 'Constantemente', 'Eventualmente' => 'Eventualmente', 'Poco' => 'Poco', 'Nunca' => 'Nunca'], NULL, ['required']) }}

									</div>

								</div>

								<div class="row">

									<div class="col-md-12">
										<button type="submit" class="btn fade in pull-right" id="btnContactUs">
											Send Message
										</button>
									</div>

								</div>

							{{ Form::close() }}
						</div>

					</div>

				</div>

			</div>
		</section>
		<!-- /Section: CONTACT -->
@endsection