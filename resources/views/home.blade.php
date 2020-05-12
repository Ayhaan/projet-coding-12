@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body mr-0">
                <p class="mb-0 ">Personne connecté: <strong>{{Auth::user()->name}}</strong></p>
            </div>
            <div class="card-body">
                <h2 class="mb-0">Bienvenue dans votre Tableau de Bord <strong>Mr. {{Auth::user()->name}}</strong> </h2>
            </div>
        </div>
    </div>
</div>

@stop
