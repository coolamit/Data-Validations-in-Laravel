@extends( "layouts/default" )

@section( "content" )
	<div class="row">
		<h3 class="col-md-6 col-md-offset-2">Test Form</h3>
	</div>
	<p>&nbsp;</p>
	@if ( ! $errors->isEmpty() )
	<div class="row">
		@foreach ( $errors->all() as $error )
		<div class="col-md-6 col-md-offset-2 alert alert-danger">{{ $error }}</div>
		@endforeach
	</div>
	@elseif ( Session::has( 'message' ) )
	<div class="row">
		<div class="col-md-6 col-md-offset-2 alert alert-success">{{ Session::get( 'message' ) }}</div>
	</div>
	@else
		<p>&nbsp;</p>
	@endif

	<div class="row">
		<div class="col-md-offset-2 col-md-6">
			{{ Form::open( array(
				'route' => 'dummy.store',
				'method' => 'post',
				'id' => 'test-form',
			) ) }}
				<div class="form-group">
					{{ Form::label( 'name', 'Name:' ) }}
					{{ Form::text( 'name', '', array(
						'id' => 'name',
						'placeholder' => 'Enter Your Full Name',
						'class' => 'form-control',
						'maxlength' => 200,
					) ) }}
				</div>
				<div class="form-group">
					{{ Form::label( 'email', 'Email:' ) }}
					{{ Form::text( 'email', '', array(
						'id' => 'email',
						'placeholder' => 'Enter Your Email',
						'class' => 'form-control',
						'maxlength' => 200,
					) ) }}
				</div>
				<div class="form-group">
					{{ Form::label( 'phone', 'Phone:' ) }}
					{{ Form::text( 'phone', '', array(
						'id' => 'phone',
						'placeholder' => 'Enter Your Phone Number',
						'class' => 'form-control',
						'maxlength' => 25,
					) ) }}
				</div>
				<div class="form-group">
					{{ Form::label( 'pin_code', 'Pin Code:' ) }}
					{{ Form::text( 'pin_code', '', array(
						'id' => 'pin_code',
						'placeholder' => 'Enter Your Pin Code',
						'class' => 'form-control',
						'maxlength' => 25,
					) ) }}
				</div>
				<div class="form-group">
					{{ Form::submit( '&nbsp; Submit &nbsp;', array(
						'id' => 'btn-submit',
						'class' => 'btn btn-primary',
					) ) }}
				</div>
			{{ Form::close() }}
		</div>
	</div>
@stop
