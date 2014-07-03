<?php

use RocketCandy\Exceptions\ValidationException;
use RocketCandy\Services\Validation\TestFormValidator;

class DummyController extends BaseController {

	/**
	 * @var RocketCandy\Services\Validation\TestFormValidator
	 */
	protected $_validator;

	public function __construct( TestFormValidator $validator ) {
		$this->_validator = $validator;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return View::make( 'dummy/create' );
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		$input = Input::all();

		try {
			$validate_data = $this->_validator->validate( $input );

			return Redirect::route( 'dummy.create' )->withMessage( 'Data passed validation checks' );
		} catch ( ValidationException $e ) {
			return Redirect::route( 'dummy.create' )->withInput()->withErrors( $e->get_errors() );
		}
	}


}	//end of class

//EOF