<?php

Route::get( '/', function() {
	return View::make( 'hello' );
} );


Route::resource( 'dummy', 'DummyController', array(
	'only' => array( 'create', 'store' ),
) );


//EOF