
@extends('masterpagedaw2')

@section('header')

  	<header id="top" class="header">
        <div class="text-vertical-center">
        	<h1>Welcome, {{ $firstname }}!</h1>
            <br>
         
        </div>
    </header>
	<br />



	<!--  -->
@endsection



@section('details')
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>{{ $username }}</h2>
                    <hr class="small">
                    <div class="row">
                        <h4>Name: {{ $firstname }} {{ $lastname }}</h4>
                        <h4>Age: {{ $age }} </h4>
                        <h4>Birthday: {{ $birthdate }} </h4>
                        <h4>Student Number: {{ $student_num }} </h4>
                        <h4>Organization Batch Name: {{ $org_batch }} </h4>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

@endsection
