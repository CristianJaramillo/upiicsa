<?php 

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used
	| by the validator class. Some of the rules contain multiple versions,
	| such as the size (max, min, between) rules. These versions are used
	| for different input types such as strings and files.
	|
	| These language lines may be easily changed to provide custom error
	| messages in your application. Error messages for custom validation
	| rules may also be added to this file.
	|
	*/

	"accepted"       => "El campo :attribute debe ser aceptado.",
	"active_url"     => "El campo :attribute no es una URL válida.",
	"after"          => "El campo :attribute debe ser una fecha después de :date.",
	"alpha"          => "El campo :attribute sólo puede contener letras.",
	"alpha_dash"     => "El campo :attribute sólo puede contener letras, números y guiones.",
	"alpha_num"      => "El campo :attribute sólo puede contener letras y números.",
	"before"         => "El campo :attribute debe ser una fecha antes :date.",
	"between"        => array(
		"numeric" => "El campo :attribute debe estar entre :min - :max.",
		"file"    => "El campo :attribute debe estar entre :min - :max kilobytes.",
		"string"  => "El campo :attribute debe estar entre :min - :max caracteres.",
	),
	"confirmed"      => "El campo :attribute confirmación no coincide.",
	"different"      => "El campo :attribute and :other debe ser diferente.",
	"email"          => "El formato del :attribute  es invalido.",
	"exists"         => "El campo :attribute seleccionado es invalido.",
	"image"          => "El campo :attribute debe ser una imagen.",
	"in"             => "El campo :attribute seleccionado  is invalid.",
	"integer"        => "El campo :attribute debe ser un entero.",
	"ip"             => "El campo :attribute Debe ser una dirección IP válida.",
	"match"          => "El formato :attribute es invalido.",
	"max"            => array(
		"numeric" => "El campo :attribute debe ser menor que :max.",
		"file"    => "El campo :attribute debe ser menor que :max kilobytes.",
		"string"  => "El campo :attribute debe ser menor que :max caracteres.",
	),
	"mimes"          => "El campo :attribute debe ser un archivo de tipo :values.",
	"min"            => array(
		"numeric" => "El campo :attribute debe tener al menos :min.",
		"file"    => "El campo :attribute debe tener al menos :min kilobytes.",
		"string"  => "El campo :attribute debe tener al menos :min caracteres.",
	),
	"not_in"         => "El campo :attribute seleccionado es invalido.",
	"numeric"        => "El campo :attribute debe ser un numero.",
	"required"       => "El campo :attribute es requerido",
	"same"           => "El campo :attribute y :other debe coincidir.",
	"size"           => array(
		"numeric" => "El campo :attribute must be :size.",
		"file"    => "El campo :attribute must be :size kilobyte.",
		"string"  => "El campo :attribute must be :size caracteres.",
	),
	"unique"         => "El campo :attribute ya ha sido tomado.",
	"url"            => "El formato de :attribute es invalido.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute_rule" to name the lines. This helps keep your
	| custom validation clean and tidy.
	|
	| So, say you want to use a custom validation message when validating that
	| the "email" attribute is unique. Just add "email_unique" to this array
	| with your custom message. The Validator will handle the rest!
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as "E-Mail Address" instead
	| of "email". Your users will thank you.
	|
	| The Validator class will automatically search this array of lines it
	| is attempting to replace the :attribute place-holder in messages.
	| It's pretty slick. We think you'll like it.
	|
	*/

	'attributes' => array(
		'category_id'    => 'categoría',
		'departament_id' => 'departamento',
        'email'       => 'correo electronico',
        'email_confirmation'    => 'repita su correo electronico',
        'full_name'   => 'nombre completo',
        'first_last_name'   => 'apellido paterno',
        'second_last_name'  => 'apellido materno',
        'name'        => 'nombre',
        'password'    => 'contraseña',
        'password_confirmation' => 'repita su contraseña',
        'remember'    => 'recordarme',
        'sex'         => 'sexo',
		'team_id'         => 'numero de equipo',
		'username'    => 'usuario',
		'question_1' => '1.- Que entiendes por organización?',
		'question_2' => '2.- Dentro de tu equipo que rol desempeñas?',
		'question_3' => '3.- Piensas que el trabajo se repartió equitativamente?',
		'question_4' => '4.- Te fueron de utilidad las herramientas electrónicas para la organización de tu equipo?',
		'question_5' => '5.- Por que?',
		'question_6' => '6.- Que plataforma fue de mayor utilidad?',
		'question_7' => '7.- Cual de estos programas usas normalmente para la elaboración de tu tus trabajos?',
		'question_8' => '8.- Tu aportación fue valorada por tus compañeros?',
		'question_9' => '9.- La comunicación en el equipo fue buena?',
		'question_10' => '10.- Te sientes satisfecho con el trabajo de tu equipo?',
	),

);