@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{$service->title}}</strong> edit :</div>

                <div class="container">
                    <div  class="d-flex justify-content-center m-5">
                    
                        <div  class="w-100 border bg-light p-5">
                            <form  action="/service/{{$service->id}}"  method="POST" >
                                @csrf
                                @method('put')
                    
                                    <div  class="form-group">
                                        <label  for="">Logo</label>
                                        <input  type="text" value="{{$service->logo}}" class="form-control"  name="logo"  id=""    placeholder="Votre logo">
                                    </div>
                                
                                
                                    <div  class="form-group mb-4">
                                        <label  for="">Titre</label>
                                        <input  type="text" class="form-control" value="{{$service->title}}" name="Title"  id=""  placeholder="Votre titre">
                                    </div>

                                    <div  class="form-group mb-4">
                                        <label  for="">Dscription</label>
                                        <input  type="text" class="form-control" value="{{$service->span}}" name="span"  id=""  placeholder="Votre description">
                                    </div>
                                        
                                    @if ($errors->any())
                                        <div  class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{  $error  }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    
                                    @endif

                                    
                                    <div class="d-flex justify-content-center">
                                         <a class="btn btn-secondary mr-2" href="/service">Back</a>
                                        <button  class="btn btn-success" type="submit">Upload</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
