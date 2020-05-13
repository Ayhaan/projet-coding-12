@extends('adminlte::page')
@section('content')
<div class="mb-3 text-center">
    <h3 class="text-center ">Membres du personnel</h3>
    <a href="/about/create" class="btn btn-success">Ajouter un collégue</a>    
</div>

<div class="container">
    @if(\Session::has('success'))
        <div class='alert alert-success text-center'>
            {{\Session::get('success')}}
        </div>
    @endif

</div>
<div class="row">
    @foreach ($abouts as $about)

        <div class="card w-75  m-2">
            <div class="card-body">
	            <div class="row">
                    <div class="col-5 p-1">
	            		<div class="block-2-img-container">
                            @if (Storage::disk('public')->has($about->img_url))
							    <img width="100%" src={{asset('storage/'.$about->img_url)}} alt="" data-at2x="assets/img/about/1.jpg">
                            @else 
							    <img src={{$about->img_url}} alt="" data-at2x="assets/img/about/1.jpg">
                            @endif
	            			<div class="img-container-line line-1"></div>
	            			<div class="img-container-line line-2"></div>
	            			<div class="img-container-line line-3"></div>
	            		</div>
	            	</div>
	            	<div class="col-7">
                        <h3 class="text-center mb-4">User:</h3>
                        <h4>{{$about->name}} / <span><strong>{{$about->role->name}}</strong> </span></h4>
                        <p class="mb-0"><strong>Présentation :</strong></p>
	            		<p>
							{{$about->description}}	            		
                        </p>
                        <p class="mb-0"><strong>Déscription du poste :</strong></p>
	            		<p>
							{{$about->descriptionSecondary}}
	            		</p>
	            		{{-- <h3>Les réseaux sociaux:</h3> --}}
	            		<div class="d-flex mt-3 pr-5">
                            <p> <strong>Réseaux perso :</strong> </p> 
                            <p class="ml-2">Facebook</p>
                            <p class="ml-2">Dribble</p>
                            <p class="ml-2">Twitter</p>
                            <p class="ml-2">Pinterest</p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="/about/{{$about->id}}/edit" class="btn btn-info m-2">Edit</a>
                
                            <form action="about/{{$about->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger m-2">Delete</button>
                            </form>
                        </div>
                        
	            	</div>
	            </div>
            </div>
         </div>   
         
     @endforeach
</div>    
    
@endsection