        <!-- Call to action -->
        <div class="call-to-action-container section-container section-container-full-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
                    <div class="col-sm-12">
                        <div class="section-bottom-link wow fadeInUp">
                        	<a class="big-link-1 btn scroll-link" href="#contact">Contact us now!</a>
                        </div>
                    </div>
                </div>
	        </div>
        </div>		
		<!-- About us -->
        <div class="about-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 about section-description wow fadeIn">
	                    <h2>About us</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
	                    	aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
	                    </p>
	                </div>
	            </div>
	        </div>
		</div>
		
		{{-- @foreach ($abouts as $about) --}}
		@for ($i = 0; $i < count($abouts); $i++)
		@if ($i  % 2)
			
		<div class="block-2-container section-container section-container-gray about-block-2-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-8 block-2-box block-2-left wow fadeInLeft">
	            		<h3>{{$abouts[$i]->name}} / <span>{{$abouts[$i]->role->name}}</span></h3>
	            		<p>
							{{$abouts[$i]->description}}	            		
						</p>
	            		<p>
							{{$abouts[$i]->descriptionSecondary}}
	            		</p>
	            		<h3>Follow Him:</h3>
	            		<div class="about-social">
		                	<a href={{$abouts[$i]->facebook}} target="_blank"><i class="fa fa-facebook"></i></a>
		                	<a href={{$abouts[$i]->dribbble}} target="_blank"><i class="fa fa-dribbble"></i></a>
		                    <a href={{$abouts[$i]->twitter}} target="_blank"><i class="fa fa-twitter"></i></a>
		                    <a href={{$abouts[$i]->pinterest}} target="_blank"><i class="fa fa-pinterest"></i></a>
		                </div>
	            	</div>
	            	<div class="col-sm-4 block-2-box block-2-right block-2-media wow fadeInUp">
	            		<div class="block-2-img-container">

							@if (Storage::disk('public')->has($abouts[$i]->img_url))
								<img  src={{asset('storage/'.$abouts[$i]->img_url)}} alt="" data-at2x="assets/img/about/1.jpg">
							@else 
								<img src={{$abouts[$i]->img_url}} alt="" data-at2x="assets/img/about/1.jpg">
							@endif

							{{-- <img src={{$abouts[$i]->img_url}} alt="" data-at2x="assets/img/about/1.jpg"> --}}
	            			<div class="img-container-line line-1"></div>
	            			<div class="img-container-line line-2"></div>
	            			<div class="img-container-line line-3"></div>
	            		</div>
	            	</div>
	            </div>
	        </div>
		</div>
		@else
        
		<div class="block-2-container section-container about-block-2-container">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 block-2-box block-2-left block-2-media wow fadeInLeft">
						<div class="block-2-img-container">
							@if (Storage::disk('public')->has($abouts[$i]->img_url))
								<img  src={{asset('storage/'.$abouts[$i]->img_url)}} alt="" data-at2x="assets/img/about/1.jpg">
							@else 
								<img src={{$abouts[$i]->img_url}} alt="" data-at2x="assets/img/about/1.jpg">
							@endif
							{{-- <img src={{$abouts[$i]->img_url}} alt="" data-at2x="assets/img/about/1.jpg"> --}}
							<div class="img-container-line line-1"></div>
							<div class="img-container-line line-2"></div>
							<div class="img-container-line line-3"></div>
						</div>
					</div>
					<div class="col-sm-8 block-2-box block-2-right wow fadeInUp">
						<h3>{{$abouts[$i]->name}} / <span>{{$abouts[$i]->role->name}}</span></h3>
						<p>
							{{$abouts[$i]->description}}
						</p>
						<p>
							{{$abouts[$i]->descriptionSecondary}}
						</p>
						<h3>Follow Her:</h3>
						<div class="about-social">
							<a href={{$abouts[$i]->facebook}} target="_blank"><i class="fa fa-facebook"></i></a>
							<a href={{$abouts[$i]->dribbble}} target="_blank"><i class="fa fa-dribbble"></i></a>
							<a href={{$abouts[$i]->twitter}} target="_blank"><i class="fa fa-twitter"></i></a>
							<a href={{$abouts[$i]->pinterest}} target="_blank"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		@endif
		
		@endfor
        
 