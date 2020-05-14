@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{$portfolio->span}} </strong> edit :</div>

                <div class="container">
                    <div  class="d-flex justify-content-center m-5">
                    
                        <div  class="w-100 border bg-light p-5">
                            <form  action="/portfolio/{{$portfolio->id}}"  method="POST" enctype="multipart/form-data" >
                                @csrf
                                @method('put')
                                              
                                    <div  class="form-group mb-4">
                                        <label  for="">Titre du projet</label>
                                        <input  type="text" class="form-control" value="{{$portfolio->span}}" name="span"  id=""  placeholder="Votre titre">
                                    </div>

                                    <div class="form-group ">
                                        <label for="inputState">Type de projet</label>
                                        <select name="logiciel_id" id="inputState" class="form-control">
                                            @foreach($logiciels as $logiciel)
                                                <option {{ $logiciel->id == $portfolio->logiciel_id ? "selected" : "" }} value="{{$logiciel->id}}">{{$logiciel->name}}</option>
                                            @endforeach                                        </select>
                                      </div>
                                    <div  class="form-group mb-4">
                                        <label  for="inputFile">Image</label>
                                        <input  type="file"  name="img_path"  id="inputFile"> 
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

                                    
                                    <div class="d-flex justify-content-center mt-5">
                                        <a class="btn btn-secondary mr-2" href="/portfolio">Back</a>
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
