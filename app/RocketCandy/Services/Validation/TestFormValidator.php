<?php

namespace RocketCandy\Services\Validation;

/**
 * Validation class for our test form.
 * We just need to set validation rules in this class
 * and then call validate() method on its object to
 * validate form data which we will pass to it.
 */
class TestFormValidator extends Validator {

	/**
	 * @var array Validation rules for the test form, they can contain in-built Laravel rules or our custom rules
	 */
	public $rules = array(
		'name' => array( 'required', 'alpha_dash_spaces', 'max:200' ),
		'email' => array( 'required', 'email', 'min:6', 'max:200' ),
		'phone' => array( 'required', 'numeric', 'digits_between:8,25' ),
		'pin_code' => array( 'required', 'alpha_num_spaces', 'max:25' ),
	);

}	//end of class


//EOF