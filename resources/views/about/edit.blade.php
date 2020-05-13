@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{$about->name}} </strong> edit :</div>

                <div class="container">
                    <div  class="d-flex justify-content-center m-5">
                    @if(\Session::has('success'))
                        <div class='alert alert-success text-center'>
                            {{\Session::get('success')}}
                        </div>
                    @endif
                        <div  class="w-100 border bg-light p-5">
                            <form  action="/about/{{$about->id}}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                              
                                    <div  class="form-group mb-4">
                                        <label  for="">Nom de la personne.</label>
                                        <input  type="text" class="form-control" value="{{$about->name}}" name="name"  id=""  placeholder="Nom && Prénom">
                                    </div>      
                                    <div  class=" mb-4 d-flex flex-column">
                                        <label  for="hello">Présentation.</label>
                                        {{-- <input  type="text" class="form-control" value="{{$about->description}}" name="span"  id=""  placeholder="Votre titre"> --}}
                                        <textarea class="form-control" id="hello" name="description"  cols="50" rows="4" placeholder="description">{{$about->description}}</textarea>
                                    </div>     
                                    <div  class="form-group mb-4">
                                        <label  for="">Description de son poste</label>
                                        {{-- <input  type="text" class="form-control" value="{{$about->descriptionSecondary}}" name="span"  id=""  placeholder="Votre titre"> --}}
                                        <textarea class="form-control" id="hello" name="descriptionSecondary"  cols="50" rows="4" placeholder="Description du poste">{{$about->descriptionSecondary}}</textarea>

                                    </div>    
                                    <div class="row">
                                        <div  class="form-group mb-4 col-6">
                                            <label  for="">Facebook</label>
                                            <input  type="text" class="form-control" value="{{$about->facebook}}" name="facebook"  id=""  placeholder="facebook">
                                        </div>
                                        <div  class="form-group mb-4 col-6">
                                            <label  for="">Twitter</label>
                                            <input  type="text" class="form-control" value="{{$about->twitter}}" name="twitter"  id=""  placeholder="twitter">
                                        </div>
                                        <div  class="form-group mb-4 col-6">
                                            <label  for="">Dribbble</label>
                                            <input  type="text" class="form-control" value="{{$about->dribbble}}" name="dribbble"  id=""  placeholder="dribbble">
                                        </div>
                                        <div  class="form-group mb-4 col-6">
                                            <label  for="">Pinterest</label>
                                            <input  type="text" class="form-control" value="{{$about->pinterest}}" name="pinterest"  id=""  placeholder="pinterest">
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <div class="form-group">
                                            <label for="">Roles</label>
                                            <select name="role_id">
                                                @foreach($roles as $role)
                                                    <option {{ $role->id == $about->role_id ? "selected" : "" }} value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
    
                                        <div  class="form-group mb-4">
                                            <label  for="inputFile">Image</label>
                                            <input  type="file"  name="img_path"  id="inputFile"> 
                                        </div>
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

                                    
                                    <div class="d-flex justify-content-end mt-2">
                                        <a class="btn btn-secondary mr-2" href="/about">Back</a>
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