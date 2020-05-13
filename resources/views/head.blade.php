@extends('adminlte::page')

@section('content')

<h3 class="text-center pb-1">Modification "Header"</h3>
    <div class="d-flex justify-content-center mb-4">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg">Modifier</button>
    </div>


    <div class="container">
        @if(\Session::has('success'))
            <div class='alert alert-success text-center'>
                {{\Session::get('success')}}
            </div>
        @endif

        @if ($errors->any())
            <div  class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{  $error  }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
<div style="height: 60vh" class="text-center shadow p-3 ml-5 mr-5 bg-white rounded ">
    <div class="row">
        <div class="col-lg-6"><h2>CONTENU VISUEL:</h2></div>
        <div class="col-lg-6"><h2>BACKGROUND IMAGE :</h2></div>
    </div>
    <div class="mt-5 row">
        
        <div class="col-lg-6 border p-3">
            <div>
                <h3  class="mt-3 text-capitalize"> {{$head->Title}} </h3>
                <textarea  style="border: none;background: none" cols="60" rows="4" class="mt-4 text-center">{{$head->descirption}}</textarea>
                
            </div>
            <div class="page-title-bottom-link mt-3">
                <p class="btn btn-success scroll-link">Start now</p>
                <p class="btn scroll-link" >Learn more</p>
            </div>
        </div>
        <div class="col-lg-6 border p-3">
            @if (Storage::disk('public')->has($head->url_img))
                <img height="250px" src="{{asset('storage/'.$head->url_img)}}" alt="">
		    @else 
                <img height="250px" src="{{$head->url_img}}" alt="">
		    @endif
        </div>
        

    </div>

    </div>
</div>

        <!-- Large modal -->

<div> 
    <div class="modal fade bd-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            @if ($errors->any())

            @endif
            <form class="p-5" action="/head/{{$head->id}}"  method="POST" enctype="multipart/form-data" >
                @csrf
                @method('put')
                    <div class="mb-5">
                        <button type="button" class="btn btn-danger float-right" data-dismiss="modal">X</button>
                    </div>
    
                    <div  class="form-group">
                        <label id="Name"  for="">Titre</label>
                        <input  type="text" value="{{$head->Title}}" class="form-control"  name="Title"  id="Name"    placeholder="Name">
                    </div>
                
                
                    <div  class="form-group mb-4">
                        <label id="description"  for="">Descritpion</label>
                        <textarea  name="descirption" id="description" cols="100" rows="10" class="form-control">{{$head->descirption}}</textarea>
                    </div>                
                    <div  class="form-group mb-4">
                        <label  for="inputFile">Upload</label>
                        <input  type="file"  name="img_path"  id="inputFile"> 
                    </div>

                    <div class="d-flex justify-content-end">
                        <a class="btn btn-secondary mr-2" href="/head">Back</a>
                        <button  class="btn btn-success" type="submit">Upload</button>
                    </div>
            </form>
        </div>
    </div>
    </div>
</div>
        
@endsection