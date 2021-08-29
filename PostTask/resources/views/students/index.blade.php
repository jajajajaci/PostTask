@extends('students.layout')

@section('content')

<div class="pull-left">

	<br>
	<h2 style="text-align:center;">Student Management System</h2>
	<br>


	</div>

	<div class="row">

	<div class="col-lg-12 margin-tb">
	</div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>

</div>
@endif

<table class="table table-bordered">



<tr>

	<th>No</th>
	<th>Name</th>
	<th>Course</th>
	<th>Remaining Balance</th>
	<th width="280px">Action</th>
</tr>

@foreach ($students as $student)
<tr>

	<td>{{ ++$i }}</td>
	<td>{{ $student->studname }}</td>
	<td>{{ $student->course }}</td>
	<td>{{ $student->fee }}</td>

	<td>
	<form action="{{ route('students.destroy',$student->id) }}" method="POST">
	

	<a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>

	@csrf
	@method('DELETE')

	<button type="submit" class="btn btn-danger">Delete</button>

	</form>

    </td>
</tr>
@endforeach
</table>

<br> 

<div style="text-align:center;">
	<a class="btn btn-success" href="{{ route('students.create') }}"> Create New Profile</a>
</div>