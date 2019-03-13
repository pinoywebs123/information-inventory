@extends('admin.template')

@section('contents')
	<ul class="nav nav-tabs">
	  <li ><a href="{{route('admin_product')}}">General</a></li>
	  <li class="active"><a href="{{route('admin_product_apparel')}}">Apparel</a></li>
	  
	</ul>

	<div>
		<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal" style="margin-top: 10px">New Product</button>

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


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Product Informations</h4>
      </div>
      <div class="modal-body">
        <form>
        	<div class="form-group">
        		<label>Name</label>
        		<input type="text" name="name" class="form-control" required="">
        	</div>
        	<div class="row">
        		<div class="col-md-6">
        			<div class="form-group">
		        		<label>Price</label>
		        		<input type="number" name="price" class="form-control" required="">
		        	</div>
        		</div>
        		<div class="col-md-6">
        			<div class="form-group">
		        		<label>Quantity</label>
		        		<input type="number" name="quantity" class="form-control" required="">
		        	</div>
        		</div>
        	</div>

        	<div class="form-group">
        		<label>Description</label>
        		<textarea class="form-control" name="description" required=""></textarea>
        	</div>
        	<button type="submit" class="btn btn-primary">Submit</button>
        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
      </div>
      
    </div>

  </div>
</div>	
@endsection

