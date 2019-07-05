@extends('layouts.admin')

@section('content_admin')
	<a href="{{ route('admin.index') }}">Show index</a>
	<a href="{{ route('admin.producters.create')}}">Create producters</a>

	<table>
		<tr>
			<th> ID</th>
			<th> Name</th>
		</tr>
		@foreach( $producters as $item)
			<tr>

				<td>{{ $item->id }}</td>

				<td><a href="#">{{ $item->name }}</a></td>

				
			</tr>
		@endforeach
	</table>
@endsection