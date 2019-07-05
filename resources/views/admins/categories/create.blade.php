@extends('layouts.admin')

@section('content_admin')
<h1>Create Category</h1>
<div class="row">

	<form action="{{route('admin.categories.store')}}" method="POST">
	@csrf
		<label style="padding: 20px">Name</label>
		<input type="text" name="name" value="">
		<button type="submit">Create</button>
	</form>
	
</div>
<a href="{{ route('admin.index') }}">Return Index</a>

@endsection