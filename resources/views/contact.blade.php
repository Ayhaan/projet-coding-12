@extends('adminlte::page')

@section('content')
<section class="content">
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
    <div class="row">
      <div class="col-md-3">

        <div class="card">
          <div class="card-body">
            <h3>Settings </h3>
            <h5><strong>{{Auth::user()->name}}</strong> connected</h5>
            <h3 class="mt-5">Contenu visuelle  </h3>
            @foreach ($contacts as $contact)
                 <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg">Editer le contenue</button>

            @endforeach


          </div>
        </div>

      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="box box-primary">

          {{-- <div class="box-header with-border">
            <h3 class="box-title"></h3>
          </div> --}}
          <div class="card w-25">
            <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">Your MailBox</h5>
        </div>
         

            <div class="table-responsive mailbox-messages">
              <table class="table table-hover">
                <tr>
                  {{-- <td>Nbr :</td> --}}
                  <td class="mailbox-name">
                        <a href="read-mail.html">Email </a>
                  </td>
                  <td class="mailbox-subject"><b></b>
                      Sujet:
                  </td>   
                  
                  <td class="mailbox-subject pl-5"><b></b>
                      Message:
                  </td>
                  <td class="mailbox-date">Date/heure de l'envoie:</td>
                  <td class="mailbox-date">Action:</td>
              </tr>
                @foreach ($mails as $mail)
                   <tbody>
                      
                      <tr>
                          {{-- <td>{{$mail->id}}</td> --}}
                          <td class="mailbox-name">
                                <a href="#">{{$mail->email}} </a>
                          </td>
                          <td class="mailbox-subject"><b></b>
                              {{$mail->subject}}
                          </td>   
                          <td class="mailbox-subject pl-5"><b></b>
                             <textarea style="border: none; background: none" readonly name="" id="" cols="40" rows="3">{{$mail->message}}</textarea>
                          </td>
                          {{-- <td class="mailbox-attachment"></td> --}}
                          <td class="mailbox-date">{{$mail->created_at->format('d/m/Y')}} à  {{$mail->created_at->toTimeString()}} </td>
                          <td class="mailbox-date">
                            <form action="/delete/{{$mail->id}}" method="post">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-danger ">Delete</button>
                          </form>
                          </td>
                      </tr>
                      
                    </tbody>
                @endforeach
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


          <!-- Large modal -->

<div> 
    <div class="modal fade bd-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            @if ($errors->any())

            @endif
            <form class="p-5" action="/contact/{{$contact->id}}"  method="POST" enctype="multipart/form-data" >
                @csrf
                @method('put')
                    <div class="mb-5">
                        <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
                    </div>
    
       
                    <div  class="form-group">
                        <label id="description"  for="">Mini déscription</label>
                        <textarea  name="description" id="description" cols="100" rows="5" class="form-control" placeholder="Déscription">{{$contact->description}}</textarea>
                    </div>  
                    <div  class="form-group">
                        <label id="Name"  for="">Adress </label>
                        <input  type="text" value="{{$contact->adress}}" class="form-control"  name="adress"  id="Name"    placeholder="Votre adresse">
                    </div>
                    <div  class="form-group">
                        <label id="Name"  for="">Phone number</label>
                        <input  type="text" value="{{$contact->phone}}" class="form-control"  name="phone"  id="Name"    placeholder="Votre numéro">
                    </div>
                    <div  class="form-group">
                        <label id="Name"  for="">Mail</label>
                        <input  type="text" value="{{$contact->email}}" class="form-control"  name="email"  id="Name"    placeholder="Votre e-mail">
                    </div>
                
                    <div class="d-flex justify-content-end">
                        <button  class="btn btn-success" type="submit">Upload</button>
                    </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection