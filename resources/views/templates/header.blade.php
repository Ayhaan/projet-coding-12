		<!-- Page title -->
		@if (Storage::disk('public')->has($head->url_img))
			<div  style="background-image:url({{asset('storage/'.$head->url_img)}});height:800px"  class=" top-content">

		@else 
			<div  style="background-image:url({{$head->url_img}});height:800px"  class=" top-content">
		@endif
		
            <div class="page-title-text wow fadeInUp d-flex ">
				<div class="p-5">
					<div>
						<br><br><br><br><br><br><br><br><br><br><br><br>
						<h1 class="m-0">{{$head->Title}}</h1>
						<p>{{$head->descirption}}</p>
					</div>
					<div class="page-title-bottom-link">
						<a class="big-link-1 btn scroll-link" href="#pricing-2">Start now</a>
						<a class="big-link-2 btn scroll-link" href="#what-we-do">Learn more</a>
					</div>
				</div>
            </div>
		</div>
		
		{{-- <div  style="background-image:url({{$head->url_img}});height:75vh"  class=" top-content">
		</div> --}}