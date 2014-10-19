<?php

/**
 * Default options for inputs.
 * Used by default FormHelper class.
 *
 * @var array
 */

Configure::write('Bs3.Form.styles', array(
	'horizontal2' => array(
		'formDefaults' => array(
			'submitDiv' => 'col-sm-8 col-sm-offset-3',
			'class' => 'form-horizontal'
		),
		'inputDefaults' => array(
			'label' => array(
				'class' => 'col-md-3 control-label'
			),
			'wrap' => 'col-md-6',
		)		
	),
	'horizontal222' => array(
		'formDefaults' => array(
			'submitDiv' => 'col-sm-8 col-sm-offset-3',
			'class' => 'form-horizontal'
		),
		'inputDefaults' => array(
			'label' => array(
				'class' => 'col-md-4 control-label'
			),
			'wrap' => 'col-md-8',
		)		
	),
	'horizontal5' => array(
		
		'formDefaults' => array(
			'class' => 'form-horizontal'
		),
		'inputDefaults' => array(
			'div' => array(
				'class' => 'form-group',
				'style' => 'margin-bottom: 1px;'
			),
			'wrap' => 'col-sm-8'
		)		
	),
	'horizontal3' => array(		
		'formDefaults' => array(
			'class' => 'form-horizontal'
		),
		'inputDefaults' => array(
			'label' => array(
				'class' => 'col-sm-2 control-label',
				'style' => 'width:70px'
			),
			'wrap' => 'col-sm-5',
			'div' => array(
				'class' => 'form-group col-sm-12'
			)
		)		
	),
	'horizontal' => array(
		'formDefaults' => array(
			'submitDiv' => 'col-sm-8 col-sm-offset-2'
		),
		'inputDefaults' => array(
			'label' => array(
				'class' => 'col-sm-4 control-label'
			),
			'wrap' => 'col-sm-8',
		)
	),
	'inline' => array(
		'inputDefaults' => array(
			'label' => array(
				'class' => 'sr-only'
			),
		)
	),
	'horizontal32' => array(		
		'formDefaults' => array(
			'class' => 'form-horizontal'
		),
		'inputDefaults' => array(
			'label' => array(
				'class' => 'col-sm-2 control-label',
				'style' => 'width:70px'
			),
			'wrap' => 'col-sm-10',
			'div' => array(
				'class' => 'form-group col-sm-12'
			)
		)		
	),
));
