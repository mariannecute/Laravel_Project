<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Controllers\Controller;

use Session;
use Illuminate\Http\Request;

use DB;

class MyControllerHihi extends Controller {

	//

	public function index() {
		$registrationFailed = Session::get('registrationFailed', 'false');
		return view('homesweethome', compact('registrationFailed'));
	}

	public function regForm() {
		return view('form');
	}

	public function processFormWithValidation(RegisterUserRequest $request) {
		$firstname = $request->get('inputFirstName');
		$lastname = $request->get('inputLastName');
		$birthdate = $request->get('inputDateOfBirth');
		$username = $request->get('inputUsername');
		$password = $request->get('inputPassword');
		$retypePassword = $request->get('inputRetypePassword');
		$student_num = $request->get('inputStudentNumber');
		$org_batch = $request->get('inputOrganizationBatchName');

		$age = date_diff(date_create($birthdate), date_create('now'))->y;

		session_start();


			if($password == $retypePassword) {
				DB::table('users')->insert(
					    ['username' => $username,
					     'password' => $password,
			   			 'firstname' => $firstname,
						 'lastname' => $lastname,
						 'age' => $age,
						 'birthdate' => $birthdate,
						 'student_num' => $student_num,
						 'org_batch' => $org_batch
					    ]);

				$_SESSION["firstname"] = $firstname;
				$_SESSION["lastname"] = $lastname;
				$_SESSION["age"] = $age;
				$_SESSION["birthdate"] = $birthdate;
				$_SESSION["student_num"] = $student_num;
				$_SESSION["org_batch"] = $org_batch;
				$_SESSION["username"] = $username;
				return view('bahay', $_SESSION);
			}

		//return redirect()->intended('home');
	}


	public function log() {
		return view('log');
	}

	public function loggingIn(Request $request) {
		/* Place your answer here. */

		$username = $request->get('inputUsername');
		$password = $request->get('inputPassword');
 		if(isset($username) && isset($password)){
			$query = DB::table('users')->where('username', $username)->get();
			$query2 = DB::table('users')->where('password', $password)->get();

			if(count($query2) != 0 && count($query) != 0){
				session_start();
				$con=mysqli_connect("localhost","root","","homework");
				// Check connection
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				$result = mysqli_query($con,"SELECT * FROM users");

				while($row = mysqli_fetch_array($result))
				{
					if($username == $row['username']){
						$_SESSION["username"] = $row['username'];
						$_SESSION["firstname"] = $row['firstname'];
						$_SESSION["lastname"] = $row['lastname'];
						$_SESSION["age"] = $row['age'];
						$_SESSION["birthdate"] = $row['birthdate'];
						$_SESSION["student_num"] = $row['student_num'];
						$_SESSION["org_batch"] = $row['org_batch'];
					}

				}
				mysqli_close($con);



				return view('bahay', $_SESSION);
			}
			else{
				return view('logFailed');
			}
		}
	}

	public function bahay() {

		session_start();
		
		return view('bahay', $_SESSION);

		
	}

	public function edit() {
		return view('edit');
	}

	public function logout() {
		session_start();
		session_destroy();

		return view('homesweethome');
	}

	public function editting(Request $request) {
		$firstname = $request->get('inputFirstName');
		$lastname = $request->get('inputLastName');
		$birthdate = $request->get('inputDateOfBirth');
		$username = $request->get('inputUsername');
		$password = $request->get('inputPassword');
		$retypePassword = $request->get('inputRetypePassword');
		$student_num = $request->get('inputStudentNumber');
		$org_batch = $request->get('inputOrganizationBatchName');

		$age = date_diff(date_create($birthdate), date_create('now'))->y;



			if($password == $retypePassword) {
				DB::table('users')->insert(
					    ['username' => $username,
					     'password' => $password,
			   			 'firstname' => $firstname,
						 'lastname' => $lastname,
						 'age' => $age,
						 'birthdate' => $birthdate,
						 'student_num' => $student_num,
						 'org_batch' => $org_batch
					    ]);
				return redirect()->intended('bahay');
			}

		//return redirect()->intended('home');
	}		

}
