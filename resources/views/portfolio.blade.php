@extends('adminlte::page')

@section('content')
<div class="mb-5 text-center">
    {{-- <h3 class="text-center ">Modification des </h3> --}}
    <div class="card w-50 d-flex mx-auto ">
        <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">Edit Projets</h5>
      </div>
    <a href="/portfolio/create" class="btn btn-success">Créer un Projet</a>    
</div>

<div class="container">
    @if(\Session::has('success'))
        <div class='alert alert-success text-center'>
            {{\Session::get('success')}}
        </div>
    @endif

</div>
<div class="row">
    @foreach ($portfolios as $portfolio)
        <div class="card col-3 mb-5">
            <div class="card-body    ">
             <div class="portfolio-box  {{$portfolio->logiciel->name}}">
                    <div class="d-flex justify-content-center">
                        @if (Storage::disk('public')->has($portfolio->url_img))
                             <img width="75%" src="{{asset('storage/'.$portfolio->url_img)}}" alt="" data-at2x="assets/img/portfolio/1.jpg">                           
                        @else
                             <img width="75%" src="{{$portfolio->url_img}}" alt="" data-at2x="assets/img/portfolio/1.jpg">       
                        @endif

                    </div>
                    <div class="portfolio-box-text-container">
                        <div class=" portfolio-box-text text-center">
                            <strong> Nom du Projet : </strong> <p>{{$portfolio->span}}</p>
                        </div>
                    </div>
                    <div class="portfolio-box-text-container">
                        <div class=" portfolio-box-text text-center">
                            <strong> Type du Projet : </strong> 
                                <p>  
                                    {{$portfolio->logiciel->name}}	
                                </p>
                        </div>
                    </div>
                </div>	
            </div>
            <div class="d-flex justify-content-center mb-1">
                <div>

                    <a href="/portfolio/{{$portfolio->id}}/edit" class="btn btn-info ">Edit</a>
                </div>
    
                <form action="portfolio/{{$portfolio->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger ml-3">Delete</button>
                </form>
            </div>
        </div>
        @endforeach

</div>
@endsection