@extends('admin.template')

@section('contents')
	<div class="text-right">
		<form>
			<input type="date" name="start_date" required="">
			<input type="date" name="end_date" required="">
			<button type="submit" class="btn btn-danger btn-xs">Generate Report</button>
		</form>
	</div>
	<div>
		<table class="table" id="table">
			<thead>
				<th>Customer Name</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Date</th>
				<th>Status</th>
				<th>Actions</th>
			</thead>
		</table>
	</div>
@endsection