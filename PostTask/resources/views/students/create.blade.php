@extends('students.layout')

@section('content')
<div class="row">

	<div class="col-lg-12 margin-tb">
	<div class="pull-left">
	<br>
	<h2 style="text-align:center;">Add New Students</h2>
	<br>
	</div>
    </div>
</div>

@if ($errors->any())

	<div class="alert alert-danger">
	<strong>Whoops!</strong> There were some problems with your input.<br><br>
	<ul>
@foreach ($errors->all() as $error)

	<li>{{ $error }}</li>
	@endforeach

</ul>
</div>
@endif

<form action="{{ route('students.store') }}" method="POST">
@csrf

	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">
	<strong>Student Name:</strong>
	<input type="text" name="studname" class="form-control" placeholder="Student Name">
	
</div>
</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">
	<strong>Course</strong>

	<input type="text" name="course" class="form-control" placeholder="Course">

</div>
</div>

	<div class="col-xs-12 col-sm-12 col-md-12">

	<div class="form-group">
	<strong>Remaining Balance</strong>
	<input type="text" name="fee" class="form-control" placeholder="Remaining Balance">

</div>
</div>

<div>

</div>
</form>

</div>

<br> 
<div style="text-align:center;">
	<a class="btn btn-primary" href="{{ route('students.index') }}">Back</a>   
	<button type="submit" class="btn btn-primary">Submit</button>
</div>


</div>

@endsection


