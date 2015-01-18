<div class="form-group">
	{{ Form::label($name, $label, ['class' => 'pointer', 'for' => $name]) }}
	<div class="input-group">
		<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span> </span>
		{{ $control }}
	</div>
	@if ($error)
		<p class="error-message text-left">{{ $error }}</p>
	@endif
</div>