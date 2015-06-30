@extends('masterpagedaw')

@section('content')


	<br /> <br />

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<form class="form-horizontal well" method="post" action="processformwithvalidation">
				<legend p="lead"> <h2 class="text-center"> <strong>Registration Form</strong> </h2> </legend>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label for="inputFirstName" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-5 {{ $errors->has('inputFirstName')? 'has-error' : '' }}">
						<input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="First Name">
						<span class="help-block">{{ $errors->first('inputFirstName') }}</span>
					</div>
					<div class="col-sm-5 {{ $errors->has('inputLastName')? 'has-error' : '' }}">
						<input type="text" class="form-control" id="inputLastName" name="inputLastName" placeholder="Last Name">
						<span class="help-block">{{ $errors->first('inputLastName') }}</span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputDateOfBirth" class="col-sm-2 control-label">Birthdate</label>
					<div class="col-sm-6 {{ $errors->has('inputDateOfBirth')? 'has-error' : '' }}">
						<input type="date" class="form-control" id="inputDateOfBirth" name="inputDateOfBirth">
						<span class="help-block">{{ $errors->first('inputDateOfBirth') }}</span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputUsername" class="col-sm-2 control-label">Username</label>
					<div class="col-sm-6 {{ $errors->has('inputUsername')? 'has-error' : '' }}">
						<input type="text" class="form-control" id="inputUsername" name="inputUsername" placeholder="username">
						<span class="help-block">{{ $errors->first('inputUsername') }}</span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-6 {{ $errors->has('inputPassword')? 'has-error' : '' }}">
						<input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
						<span class="help-block">{{ $errors->first('inputPassword') }}</span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputRetypePassword" class="col-sm-2 control-label">Retype Password</label>
					<div class="col-sm-6 {{ $errors->has('inputRetypePassword')? 'has-error' : '' }}">
						<input type="password" class="form-control" id="inputRetypePassword" name="inputRetypePassword" placeholder="Retype Password">
						<span class="help-block">{{ $errors->first('inputRetypePassword') }}</span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputStudentNumber" class="col-sm-2 control-label">Student Number</label>
					<div class="col-sm-6 {{ $errors->has('inputStudentNumber')? 'has-error' : '' }}">
						<input type="text" class="form-control" id="inputStudentNumber" name="inputStudentNumber" placeholder="2015-12345">
						<span class="help-block">{{ $errors->first('inputStudentNumber') }}</span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputOrganizationBatchName" class="col-sm-2 control-label">Organization Batch Name</label>
					<div class="col-sm-6 {{ $errors->has('inputOrganizationBatchName')? 'has-error' : '' }}">
						<input type="text" class="form-control" id="inputOrganizationBatchName" name="inputOrganizationBatchName" placeholder="Best Batch (PC)">
						<span class="help-block">{{ $errors->first('inputOrganizationBatchName') }}</span>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-lg btn-primary">Register</button>
						<button type="reset" class="btn btn-lg btn-warning">Clear</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection