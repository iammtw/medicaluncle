@extends('seller.layouts.main')
@section('content')

	<div class="col-md-12 col-xs-12 pl-0">
		<a href="{{ url('seller/products/add') }}" class="btn btn-sm btn-primary text-center">Add More Products</a>
		<a href="{{ url('seller/products/category') }}" class="btn btn-sm btn-primary text-center">Add More Category</a>

	<div>
	<div class="row" style="margin-top: 25px">
		<div class="col-md-4 col-lg-3 col-sm-6">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top product-listimg" src="{{ url('assets/images/p1.png') }}" />
				<div class="card-body">
					<h5 class="card-title" style="min-height: 31px;"> Product name </h5>
					<p class="card-text">description </p>
					<a href="edit_product" class="btn btn-success btn-block"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp; Edit</a>
					<a href="delete_product" class="btn btn-danger btn-block"><i style="font-size:17px" class="fa">&#xf014;</i></i>&nbsp; Delete</a>
				</div>
			</div>
		</div>

		
	</div> 
	
	
@endsection
