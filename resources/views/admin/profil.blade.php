@extends('adminlte::page')

@section('content')
{{-- <div class="d-flex justify-content-center">
    <div class="col-md-8">
        <div class="box box-widget widget-user">
    
            <div class="widget-user-header bg-cyan">
                <h3 class="widget-user-username">Ayhan Caliskan</h3>
                <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
                <img  class="img-circle" src="/assets/img/about/2.jpg" alt="User Avatar">
            </div>
            <div class="box-footer bg-white">
                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block mt-5">
                            <h5 class="description-header">3,200</h5>
                            <span class="description-text">SALES</span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-right">
                        <div class="description-block mt-5">
                            <h5 class="description-header">13,000</h5>
                            <span class="description-text">FOLLOWERS</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="description-block mt-5">
                            <h5 class="description-header">35</h5>
                            <span class="description-text">PRODUCTS</span>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div> --}}


  <!-- Main layout -->
  <main>
    <div class="container-fluid">

      <!-- Section: Edit Account -->
      <section class="section">
        <!-- First row -->
        <div class="row">
          <!-- First column -->
          <div class="col-lg-4 mb-4">

            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
                <div class="d-flex justify-content-center">
                    <div class="card w-75 ">
                      <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">Edit Photo</h5>
                    </div>

                </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body text-center">
                <img width="40%" src="/assets/img/about/2.jpg" alt="User Photo" class="shadow-lg p-1 rounded mb-3 mx-auto" />

                <p class="text-muted"><small>Profile photo will be changed automatically</small></p>
                        <button class="btn btn-info btn-rounded btn-sm">Upload New Photo</button>
                        <button class="btn btn-danger btn-rounded btn-sm">Delete</button>

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- First column -->

          <!-- Second column -->
          <div class="col-lg-8 mb-4">

            <!-- Card -->
            <div class="card ">

              <!-- Card image -->
              <div class="d-flex justify-content-center">
                <div class="card w-75 ">
                  <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">Edit Account</h5>
                </div>

            </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">

                <!-- Edit Form -->
                <form>
                  <!-- First row -->

                  <div class="row">

                    <!-- First column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                          <label for="form1" data-error="wrong" data-success="right">Company</label>
                        <input value="Lancar Entr." type="text" id="form1" class="form-control validate" value="" >
                      </div>
                    </div>
                    <!-- Second column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                          <label for="form2" data-error="wrong" data-success="right">Username</label>
                        <input value="Ayhan CEO" type="text" id="form2" class="form-control validate">
                      </div>
                    </div>
                  </div>
                  <!-- First row -->

                  <!-- First row -->
                  <div class="row">
                    <!-- First column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                          <label  for="form81" data-error="wrong" data-success="right">First name</label>
                        <input value="{{Auth::user()->name}}" type="text" id="form81" class="form-control validate">
                      </div>
                    </div>

                    <!-- Second column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                          <label for="form82" data-error="wrong" data-success="right">Last name</label>
                        <input value="Caliskan" type="text" id="form82" class="form-control validate">
                      </div>
                    </div>
                  </div>
                  <!-- First row -->

                  <!-- Second row -->
                  <div class="row">

                    <!-- First column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                          <label for="form76">Email address</label>
                        <input value="Ayhan@exemple.com" type="email" id="form76" class="form-control validate">
                      </div>
                    </div>
                    <!-- Second column -->

                    <div class="col-md-6">
                      <div class="md-form mb-0">
                          <label for="form77" data-error="wrong" data-success="right">Website Address</label>
                        <input value="www.Lancar.be" type="text" id="form77" class="form-control validate">
                      </div>
                    </div>
                  </div>
                  <!-- Second row -->

                  <!-- Third row -->
                  <div class="row">

                    <!-- First column -->

                  </div>
                  <!-- Third row -->

                  <!-- Fourth row -->
                  <div class="row">
                    <div class="col-md-12 text-center my-4">
                      <input type="submit" value="Update Account" class="btn btn-info btn-rounded">
                    </div>
                  </div>
                  <!-- Fourth row -->

                </form>
                <!-- Edit Form -->

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Second column -->

        </div>
        <!-- First row -->

      </section>
      <!-- Section: Edit Account -->

    </div>

  </main>


@endsection