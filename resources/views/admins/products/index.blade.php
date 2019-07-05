@extends('layouts.admin')

@section('content_admin')
	<h1> Product </h1>
	<a href="{{ route('admin.index')}}">Show index</a>
	<br>
	<a href="{{ route('admin.products.create')}}"> Create new a product</a>

	<table class="table table-bordered">
		<tr class="success">
            <th>ID</th>
            <th>Product Name</th>
            <th>Producter</th>
            <th>Category</th>
            <th>Imae</th>
            <th>Description</th>
            <th>Edit</th>
            <th>View Detail</th>

        </tr>
        @foreach ($products as $item)
        <tr>
        	<td>{{ $item->id }}</td>
        	<td>{{ $item->name }}</td>
        	<td>{{ $item->producter->name }}</td>
        	<td>{{ $item->category->name }}</td>
        	<td><img src="{{ $item->imgProducts->first()->img_url }}" height="40px" width="30px"></td>
        	<td>{{ $item->description}}</td>
            <td><a href="{{ route('admin.products.edit',$item->id) }}">Edit</a></td>
            <td><a href="{{ route('admin.products.details.index')}}">View details</a></td>
        </tr>
        @endforeach
	</table>
	

@endsection