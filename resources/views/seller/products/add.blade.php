@extends('seller.layouts.main')
@section('content')
<div class="row">
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
</div>
@endsection