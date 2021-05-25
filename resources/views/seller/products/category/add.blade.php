@extends('seller.layouts.main')
@section('content')

<section class="content" style="margin: 25px; background: #ffffff;">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add Category</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> {{ App\User::find(auth::id())->name }} </a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Add Category</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row clearfix" >
                <div class="col-lg-12 col-md-12 col-sm-12">
                   @if (session('msg'))
                   <div class="alert alert-warning" role="alert">
                    <strong> {{ session('msg') }} </strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                    </button>
                </div>
                   @endif
                    <div class="card">
                        <div class="body" style="min-height: 1px">
                            <div class="row clearfix">
                                <div class="col-sm-12">

									<form action="{{ url('seller/products/category') }}" method="post">
                                        @csrf
										<div class="form-group">  
											<label for="">Name</label>                                  
											<input type="text" class="form-control" required name="name" placeholder="Enter Category Name" />
										</div>
	
										<div class="form-group">
											<button class="btn btn-block btn-lg btn-success">Submit</button>
										</div>
									</form>                                    
                                </div> 
                            </div>
                        </div>
                    </div>

                    <h4>All Categories</h4>

                    <div class="card">
                        <div class="body" style="min-height: 1px">
                            <div class="row clearfix">
                                <div class="col-sm-12">

                                    <table class="table table-stripped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                           <tr>
                                                <td> {{ $category->id }} </td>
                                                <td> {{ $category->name }} </td>
                                                <td> <a href=" {{ url('seller/products/category/delete/'.$category->id) }} " class="btn btn-danger">Delete</a> </td>
                                           </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
									
                                                                      
                                </div> 
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

	
@endsection
