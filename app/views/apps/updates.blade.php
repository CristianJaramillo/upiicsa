@section('app')
		<!-- Section: #UPDATES -->
		<section id="updates" class="home-section text-center">
			<div class="heading-contact marginbot-50">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">

							<div class="section-heading">
								<h1>Ultimos Registros</h1>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="timeline-centered">
			    
						@foreach($lasts_users as $index => $user)
							
							<article class="timeline-entry<?php echo $index%2==0?"":" left-aligned";?>">
					
								<div class="timeline-entry-inner">
									<time class="timeline-time" datetime="{{ $user->created_at }}"><span>03:45 AM</span> <span>Today</span></time>
									
									<div class="timeline-icon bg-{{ $faker->randomElement($colors) }}">
										<i class="entypo-feather"></i>
									</div>
									
									<div class="timeline-label">
										<h2><a href="#">{{ $user->full_name }}:</a> <span>{{ $user->category->name }}</span></h2>
										<p class="text-left">{{ $user->question_1 }}</p>
									</div>
								</div>
								
							</article>

						@endforeach
						
						
						<article class="timeline-entry begin">
						
							<div class="timeline-entry-inner">
								
								<div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
									<i class="entypo-flight"></i>
								</div>
								
							</div>
							
						</article>
						
					</div>
				</div>
			</div>
		</section>
		<!-- /Section: UPDATES -->
@endsection