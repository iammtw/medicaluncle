@extends('seller.layouts.main')
@section('content')

<div class="row">
	
	<div class="col-lg-6 col-md-6 col-sm-12">
		<div class="row">
			<div class="col-md-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
						<img src="{{ url('assets/images/mainbanner1.png') }}" alt="Los Angeles">
						</div>

						<div class="item">
						<img src="{{ url('assets/images/mainbanner2.png') }}" alt="Chicago">
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-12">
		<div class="row">

			<div class="col-md-12 col-lg-12 col-xl-12">
				<section class="panel panel-featured-left panel-featured-secondary mt-2">
					<div class="panel-body">
						<div class="widget-summary">
							<div class="widget-summary-col">
								<div class="summary">
									<center>
										<h4 class="title">Total Products</h4>
										<div class="info">
											<strong class="amount"> 48 </strong>
										</div>
									</center>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>

			<div class="col-md-12 col-lg-12 col-xl-12">
				<section class="panel panel-featured-left panel-featured-secondary mt-2">
					<div class="panel-body">
						<div class="widget-summary">
							<div class="widget-summary-col">
								<div class="summary">
									<center>
										<h4 class="title">Total Product Categories</h4>
										<div class="info">
											<strong class="amount"> {{ App\Category::where('user_id',Auth::id())->count() }} </strong>
										</div>
									</center>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>

			<div class="col-md-12 col-lg-12 col-xl-12">
				<section class="panel panel-featured-left panel-featured-tertiary">
					<div class="panel-body">
						<div class="widget-summary">
							<div class="widget-summary-col">
								<div class="summary">
									<center>
										<h4 class="title">Total Newsletters</h4>
										<div class="info">
											<strong class="amount">48</strong>
										</div>
									</center>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>

			<div class="col-md-12 col-lg-12 col-xl-12">
				<section class="panel panel-featured-left panel-featured-success">
					<div class="panel-body">
						<div class="widget-summary">
							<div class="widget-summary-col">
								<div class="summary">
									<center>
										<h4 class="title">Completed Orders</h4>
										<div class="info">
											<strong class="amount"> 48 </strong>
										</div>
									</center>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

</div>



<div class="row" style="padding-top:40px">
	<div class="recentlyaddedproindex">
		<h2>Recently Added Products</h2>
		
		<div class="col-md-4 col-lg-3 col-sm-6">
			<div class="card" style="width: 18rem;height: 375px;border:2px solid rgba(0,0,0,.125) !important">
					<img class="card-img-top product-listimg" style="height: 220px;max-width: 260px;" src="{{ url('assets/images/p1.png') }}" />
					<div class="card-body">
						<h5 class="card-title" style="padding-top:30px; font-size:1.3em"> TENS - BESMED BE-660 TAIWAN </h5>
						<p class="card-text" >₨.4,000.00 </p>
					</div>
			</div>
		</div>

		

	</div>
</div>

@endsection