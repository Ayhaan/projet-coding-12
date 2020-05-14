        <!-- Portfolio -->
        <div class="portfolio-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 portfolio section-description wow fadeIn">
	                	<h2>Our portfolio</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum 
	                    	est notare quam littera gothica, quam nunc putamus parum claram lorem.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInUp">
	            		<a href="#" class="filter-all active">All</a> / 
	            		<a href="#" class="filter-design">Design</a> / 
	            		<a href="#" class="filter-development">Development</a> / 
	            		<a href="#" class="filter-branding">Branding</a>
	            	</div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
						@foreach ($portfolios as $portfolio)
							<div class="portfolio-box {{$portfolio->logiciel->name}}">

								@if (Storage::disk('public')->has($portfolio->url_img))
									<img src="{{asset('storage/'.$portfolio->url_img)}}" alt="" data-at2x="assets/img/portfolio/1.jpg">             
								@else
									<img src="{{$portfolio->url_img}}" alt="" data-at2x="assets/img/portfolio/1.jpg">
								@endif
								<div class="portfolio-box-text-container">
									<div class="portfolio-box-text">
										<p>{{$portfolio->span}}</p>
									</div>
								</div>
							</div>		
						@endforeach

	                </div>
	            </div>
	        </div>
        </div>