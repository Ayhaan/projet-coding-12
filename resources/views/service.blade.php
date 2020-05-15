@extends('adminlte::page')

@section('content')
<div class="mb-5 text-center">
    {{-- <h3 class="text-center ">Modification des </h3> --}}
    <div class="card w-50 mx-auto ">
        <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">Edit Services</h5>
      </div>
    <a href="/service/create" class="btn btn-success">Créer un Service</a>    
</div>

<div class="container">
    @if(\Session::has('success'))
        <div class='alert alert-success text-center'>
            {{\Session::get('success')}}
        </div>
    @endif

</div>
<div class="row">

    @foreach ($services as $service)
    <div class="col-3">
        <div class="card">
            <div class="card-body">
                <div class=" wow fadeInUp">
                    <div class="block-3-box-icon">
                        {{-- <span aria-hidden="true" class="{{$service->logo}}"></span> --}}
                        {{-- <i class="fas fa-asterisk"></i> --}}
                        <p class="text-center border p-4">Logo</p>
                    </div>
                    <h3 class="text-center">{{$service->title}}</h3>
                    <p>{{$service->span}}</p>            
                </div>
            </div>
            <div class="d-flex justify-content-center ">
                <a href="/service/{{$service->id}}/edit" class="btn btn-info m-2">Edit</a>
    
                <form action="service/{{$service->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger m-2">Delete</button>
                </form>
            </div>
          </div>
          
        </div>
    @endforeach
</div>

@endsection