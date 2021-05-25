@extends('seller.layouts.main')
@section('content')
{{-- <div class="row">
	<div class="col-md-12">
		<form id="form" action="add_products" method="post" class="form-horizontal" enctype="multipart/form-data">
			<section class="panel">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="fa fa-caret-down"></a>
					</div>
					<h2 class="panel-title">Add New Product</h2>
				</header>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-sm-2 control-label">Name<span class="required">*</span></label>
						<div class="col-sm-9">
							<input type="text" name="fullname" class="form-control" placeholder="type here" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Category</label>
						<div class="col-md-9">
							<select name="category" id='select_cat' data-plugin-selectTwo class="form-control populate">
								<optgroup label="Select Category">
									<option value="1"> 1  </option>
								</optgroup>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Price<span class="required">*</span></label>
						<div class="col-sm-9">
							<input type="text" name="price" class="form-control" placeholder="price here" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">SKU<span class="required">*</span></label>
						<div class="col-sm-9">
							<input type="text" name="sku" class="form-control" placeholder="sku" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Description<span class="required">*</span></label>
						<div class="col-sm-9">
							<textarea name="desc" rows="5" class="form-control" placeholder="About You" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Select Image<span class="required">*</span></label>
						<div class="col-sm-9">
							<input type="file" name="img" class="form-control" placeholder="city name here" required/>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" class="btn btn-success" name="submit"> Submit </button>
							<button type="reset" class="btn btn-danger" name="reset">Reset</button>
						</div>
					</div>

				</div>
				<footer class="panel-footer">
					<!-- <div class="row">
						<div class="col-sm-9 col-sm-offset-3">
								<a class="btn btn-success" name="submit" role="button">Submit</a>
							<button type="reset" class="btn btn-default">Reset</button>
						</div>
					</div> -->
				</footer>
			</section>
		</form>
	</div>
</div> --}}

<section class="content" style="margin: 25px; background: #ffffff;">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add Product</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> {{ App\User::find(auth::id())->name }} </a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Add Product</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row clearfix" >
                <div class="col-lg-12 col-md-12 col-sm-12">
                    {{-- <div class="alert alert-warning" role="alert">
                        <strong>Bootstrap</strong> Better check yourself, <a target="_blank" href="https://getbootstrap.com/docs/4.2/components/input-group/">View More</a>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                        </button>
                    </div> --}}
                    <div class="card">
                        <div class="body" style="min-height: 1px">
                            <div class="row clearfix">
                                <div class="col-sm-12">

									<form action="" method="post">
										<div class="form-group">  
											<label for="">Name</label>                                  
											<input type="text" class="form-control" placeholder="Username" />
										</div>
	
										<div class="form-group">  
											<label for="">Category</label>                                  
											<select name="category_id" class="form-control">
												<option selected="true">Select Category</option>
											</select>
										</div>
	
										<div class="form-group">  
											<label for="">Price</label>                                  
											<input type="text" class="form-control" placeholder="Username" />
										</div>
	
										<div class="form-group">  
											<label for="">SKU</label>                                  
											<input type="text" class="form-control" placeholder="Username" />
										</div>
	
										<div class="form-group">  
											<label for="">Image</label>                                  
											<input type="file" class="form-control" placeholder="Username" />
										</div>
	
										<div class="form-group">
											<div class="form-line">
												<label for=""> Description </label>
												<textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
											</div>
										</div>

										<div class="form-group">
											<button class="btn btn-block btn-lg btn-success">Submit</button>
										</div>


									</form>
                                    
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
