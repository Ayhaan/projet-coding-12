@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Création de Service :</div>

                <div class="container">
                    <div  class="d-flex justify-content-center m-5">
                    
                        <div  class="w-100 border bg-light p-5">
                            <form  action="/service"  method="POST" >
                                @csrf      
                                    <div  class="form-group">
                                        <label  for="">Logo</label>
                                        <input  type="text" class="form-control"  name="logo" placeholder="Votre logo">
                                    </div>       
                                    <div  class="form-group">
                                        <label  for="">Titre</label>
                                        <input  type="text" class="form-control"  name="Title" placeholder="Votre titre">
                                    </div>       
                                    <div  class="form-group">
                                        <label  for="">Description</label>
                                        <input  type="text" class="form-control"  name="span" placeholder="Votre déscription">
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
                                        <button  class="btn btn-success" type="submit">Creer</button>
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