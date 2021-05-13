@extends('seller.layouts.main')
@section('content')
<!-- start: page -->
<div class="row">
    <div class="col-md-12 col-lg-12 col-xl-12">
        <a href="{{ url('seller/catalogs/add') }}" class="btn btn-success">Add</button> </a>
            <h1 class="newsletter-bigbaseline">You have uploaded 48 Catalogs</h1>
    </div>
    <form action="newsletter_results" method="get" class="search nav-form">
        <div class="input-group newsletter-searchbar">
            <input type="text" class="form-control" name="user_query" placeholder="Brand, Model, Keywords">
            <span class="input-group-btn">
                <button class="btn btn-default" value="Search" name="search" type="submit"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
</div>

   
<div class="row">
    <a href="#" download>
    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
        <section class="panel invendor-newsletter">
            <header class="panel-heading bg-white">
                <div class="">
                <img class="newsletter-rightimg" src="{{ url('assets/images/logo.png') }}" />
                </div>
            </header>
            <div class="panel-body">
                <p class="text-center"> Name </p>
                <a href="#" class="btn btn-danger">
                <i style="font-size:24px" class="fa">&#xf014;</i></a>
            </div>
            </a>
        </section>
    </div>
</div>


    
@endsection