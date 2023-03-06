@extends('web.layout.master')
@section('content')
<div role="main" class="main">
    @include('web.includes.topbar');
   <div id="examples" class="container py-2">
				<div class="row">
					<div class="col">
						<h4></h4>
						<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">

							<li class="nav-item active" data-option-value="*"><a class="nav-link text-2-5 text-uppercase active" href="#">Show All</a></li>
							
								<li class="nav-item" data-option-value="11111">
									<a class="nav-link text-2-5 text-uppercase" href="#">
										11111
									</a>
								</li>
						

						</ul>
					
						<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
							<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
								<div class="col-12 col-sm-6 col-lg-3 isotope-item id_php=1">
									<div class="portfolio-item">
										<a href="#">
											<span class="thumb-info thumb-info-lighten border-radius-0">
												<span class="thumb-info-wrapper border-radius-0">
													<img src="{{asset('default.jpg')}}" class="img-fluid border-radius-0" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">3333</span>
														<span class="thumb-info-type">444</span>
													</span>
													<span class="thumb-info-action">
														<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
													</span>
												</span>
											</span>
										</a>
									</div>
								</div>







							</div>
						</div>
					</div>
				</div>
			</div>
</div>
@endsection