<div class="line-form">
	<div class="sub-line">
		{{ Form::label($name, $label, ['class' => 'pointer', 'for' => $name]) }}
	</div>
	{{ $control }}
    @if ($error)
        <p class="error-message">{{ $error }}</p>
    @endif
</div>