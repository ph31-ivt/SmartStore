@extends('layouts.admin')


@section('content_admin')
	<a href="{{ route('admin.index') }}">Show index</a>
	<a href="{{ route('admin.categories.create')}}">Create category</a>

	<table>
		<tr>
			<th> ID</th>
			<th> Name</th>
		</tr>
		@foreach( $categories as $item)
			<tr>

				<td>{{ $item->id }}</td>

				<td><a href="#">{{ $item->name }}</a></td>

				
			</tr>
		@endforeach
	</table>
@endsection