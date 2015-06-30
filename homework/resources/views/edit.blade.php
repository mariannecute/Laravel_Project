@extends('masterpagedaw2')

@section('content')
	<br /> <br />

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<form class="form-horizontal well" method="post" action="editting">
				<legend p="lead"> <h2 class="text-center"> <strong>Edit Details (Unfortunately, this feauture is under construction!)</strong> </h2> </legend>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label for="inputFirstName" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="First Name">
					</div>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="inputLastName" name="inputLastName" placeholder="Last Name">
					</div>
				</div>

				<div class="form-group">
					<label for="inputDateOfBirth" class="col-sm-2 control-label">Birthdate</label>
					<div class="col-sm-6">
						<input type="date" class="form-control" id="inputDateOfBirth" name="inputDateOfBirth">
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-6">
						<input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
					</div>
				</div>

				<div class="form-group">
					<label for="inputRetypePassword" class="col-sm-2 control-label">Retype Password</label>
					<div class="col-sm-6">
						<input type="password" class="form-control" id="inputRetypePassword" name="inputRetypePassword" placeholder="Retype Password">
					</div>
				</div>

				<div class="form-group">
					<label for="inputDegreeProgram" class="col-sm-2 control-label">Student Number</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="inputStudentNumber" name="inputStudentNumber" placeholder="2015-12345">
					</div>
				</div>

				<div class="form-group">
					<label for="inputDegreeProgram" class="col-sm-2 control-label">Organization Batch Name</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="inputOrganizationBatchName" name="inputOrganizationBatchName" placeholder="Best Batch (PC)">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-lg btn-primary">Edit</button>
						<button type="reset" class="btn btn-lg btn-warning">Clear</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection