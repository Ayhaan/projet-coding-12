		<!-- Contact us (block 2) -->
        <div class="block-2-container section-container contact-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 block-2 section-description wow fadeIn">
	                	<h2>Contact us</h2>
	                	<div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	{{$contact->description}}
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-4 block-2-box block-2-left contact-form wow fadeInLeft">
						<h3>Email us</h3>

						@if(\Session::has('success'))
							<div class='alert alert-success text-center'>
								{{\Session::get('success')}}
							</div>
						@endif
						
						<form action="/seed/mail" method="POST">
							@csrf

	                    	<div class="form-group">
	                    		<label class="sr-only" for="contact-email">Email</label>
								<input type="text" name="email" placeholder="Email..." class="contact-email form-control" >
								@error('email')
									<div class='alert alert-danger'>
										{{$message}}
									</div>
								@enderror
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="contact-subject">Subject</label>
								<input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" >
								@error('subject')
									<div class='alert alert-danger'>
										{{$message}}
									</div>
								@enderror
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="contact-message">Message</label>
								<textarea name="message" placeholder="Message..." class="contact-message form-control" ></textarea>
								@error('message')
									<div class='alert alert-danger'>
										{{$message}}
									</div>
								@enderror
	                        </div>
							<button type="submit" class="btn">Send it</button>
							
						</form>

							
	            	</div>
	            	<div class="col-sm-4 block-2-box block-2-right contact-address wow fadeInUp">
	            		<h3>Visit us</h3>
	                    <p><span aria-hidden="true" class="icon_pin"></span>Via {{$contact->adress}}</p>
	                    <p><span aria-hidden="true" class="icon_phone"></span>Phone: {{$contact->phone}}</p>
	                    <p><span aria-hidden="true" class="icon_mail"></span>Email: <a href="">{{$contact->email}}</a></p>
	            	</div>
	            </div>
	            <div class="contact-icon-container">
            		<span aria-hidden="true" class="icon_mail"></span>
            	</div>
	        </div>
        </div>