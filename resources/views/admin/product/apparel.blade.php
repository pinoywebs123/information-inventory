@extends('admin.template')

@section('contents')
	<ul class="nav nav-tabs">
	  <li ><a href="{{route('admin_product')}}">General</a></li>
	  <li class="active"><a href="{{route('admin_product_apparel')}}">Apparel</a></li>
	  
	</ul>

	<div>
		<table class="table" id="table">
			<thead>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Actions</th>
			</thead>
		</table>
	</div>
@endsection