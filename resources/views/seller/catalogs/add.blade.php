@extends('seller.layouts.main')
@section('content')

<div class="row">
    <div class="col-md-12">
        <form id="form" action="add_nl" method="post" class="form-horizontal" enctype="multipart/form-data">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                    </div>
                    <h2 class="panel-title">Add New Newsletter</h2>
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
                        <select name="category" data-plugin-selectTwo class="form-control populate">
                                <optgroup label="Select Category">
                                    <option value="1"> 1  </option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Description<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <textarea name="desc" rows="5" class="form-control" placeholder="About Catalog" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Select Image<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="file" name="img" class="form-control" placeholder="city name here" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Select PDF<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input type="file" name="pdf" class="form-control" placeholder="city name here" required/>
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

                </footer>
            </section>
        </form>
    </div>
</div>
       
@endsection