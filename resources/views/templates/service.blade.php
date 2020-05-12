		<!-- What we do -->
        <div class="block-3-container section-container what-we-do-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 block-3 section-description wow fadeIn">
	                    <h2>What we do</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
					@foreach ($services as $service)
						<div class="col-sm-3 block-3-box wow fadeInUp">
							<div class="block-3-box-icon">
								<span aria-hidden="true" class="{{$service->logo}}"></span>
							</div>
							<h3>{{$service->title}}</h3>
							<p>{{$service->span}}</p>
						</div>
					@endforeach
				</div>
				{{$services->links()}}
				
	        </div>
        </div>