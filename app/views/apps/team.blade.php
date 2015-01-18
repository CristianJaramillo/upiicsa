@section('app')
		<!-- Section: #TEAM -->
		<section id="team" class="home-section text-center bg-gray">
			
			<div class="heading-about marginbot-50">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">

							<div class="section-heading">
								<h2>Miembros del Equipo {{ $id }}</h2>
							</div>

						</div>
					</div>
				</div>
			</div>

		</section>
		<!-- /Section: TEAM -->
@endsection

@section('scripts')
	<script type="text/javascript">
		
		(function($){

			$.fn.listTeam = function(data){

				if (this.length === 0) {return this};

				var el = this;

				var init = function(){

					el.append('<div class="container"/>');
					el.container = el.find(" > div.container");

					var row = $('<div class="row"/>');

					$.each(data, function(index, value){
						if (row.find("> div > div.team").length == 4) {
							el.container.append(row);
							row = $('<div class="row"/>');
						};
						row.append(getBoxUser(value));
					});

					el.container.append(row);
				};

				var getBoxUser = function(user){
					return '<div class="col-xs-12 col-sm-3 col-md-3"><div class="team boxed-grey"><div class="inner"><h4>' + user.full_name + '</h4><h6>' + user.category.name + '</h6><div class="avatar"><img src="{{ asset('img/team') }}/' + user.sex + '.jpg" title="' + user.question_2 + '" class="img-responsive" /></div><p class="subtitle text-left">' + user.question_1 + '</p></div></div></div>';
				};

				init();

			};

		})(jQuery);

		$("#team").listTeam({{ json_encode($users_team) }});

	</script>
@endsection