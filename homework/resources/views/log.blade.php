
@extends('masterpagedaw')

@section('content')
	<br /> <br />

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<form class="form-horizontal well" method="post" action="loggingIn">
				<legend p="lead"> <h2 class="text-center"> <strong>Login</strong> </h2> </legend>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label for="inputUsername" class="col-sm-2 control-label">Username</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="inputUsername" name="inputUsername" placeholder="username">
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-6">
						<input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
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