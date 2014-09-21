<div class="col-xs-12 col-sm-6 col-md-7">
	<div class="form-group">
	    {{ Form::label($name, $label, ['class' => 'pointer', 'for' => $name]) }}
	    {{ $control }}
	    @if ($error)
	        <p class="error-message">{{ $error }}</p>
	    @endif
	</div>
</div>