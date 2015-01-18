<div class="form-group">
	{{ Form::label($name, $label, ['class' => 'pointer', 'for' => $name]) }}
	{{ $control }}
	@if ($error)
		<p class="error-message text-left">{{ $error }}</p>
	@endif
</div>