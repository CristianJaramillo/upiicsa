{{-- SETUP PAGE --}}
@if(isset($page))
	
	{{-- LAYOUT --}}
	@if(isset($page->layout))
		@extends($page->layout)
	@endif

	{{-- APP --}}
	@if(isset($page->app))
		@include($page->app)
	@endif
	
@endif