@extends('seller.layouts.main')
@section('content')

	<div class="col-md-12 col-xs-12 pl-0">
		<a href="{{ url('seller/products/add') }}" class="btn btn-sm btn-primary text-center">Add More Products</a>
		<a href="add-newcategory" class="btn btn-sm btn-primary text-center">Add More Category</a>


		<div class="sentrequest-selectcheck mt-3"  style="margin-bottom: 7px;">
			<form class="display-inline" action="product_results" method="get" enctype="multipart/form-data" >
				<input type="text"  style="margin-bottom: 7px; width:370px;" class="form-control" name="user_query" id="search" placeholder="Search a Product" >
				<input type="submit"  value="Search" class="btn btn-success ml-3" name="search" id="searchsub" >
			</form>
		</div>

		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="dropdown">
					<button  class="dropdown-toggle btncustom-categoryview" type="button" data-toggle="dropdown"> Talha
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu menucustom-fullview">
						<li>
							<a href="#">Mtw</a>
						</li>
					</ul>
				</div>
			</div>					
		</div>
	<div>
	<div class="row">
		<div class="col-md-4 col-lg-3 col-sm-6">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top product-listimg" src="{{ url('assets/images/p1.png') }}" />
					<div class="card-body">
						<h5 class="card-title" style="min-height: 31px;"> Product name </h5>
						<p class="card-text">description </p>
						<a href="edit_product" class="btn btn-success"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
						<a href="delete_product" class="btn btn-danger"><i style="font-size:17px" class="fa">&#xf014;</i></i></a>
					</div>
				</div>
		</div>
	</div>	
	
@endsection
