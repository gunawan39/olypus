@extends('layouts.app')
@section('content')
@include('sweetalert::alert')
<?php
// $awal
$awal = isset($_GET['awal'])?$_GET['awal']:'';
$akhir = isset($_GET['akhir'])?$_GET['akhir']:'';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2> Profil User</h2> 
                </div>
                <div class="card-body">
                    @foreach($user as $p)
                        <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                        <div class="form-group">
                                <label for="name">Nama</label>
                                <input class="form-control" type="text" name="name" value="{{ $p->name }}">
                        </div>
                        <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" name="email" value="{{ $p->email }}">
                        </div>
                        <div class="form-group">
                                <label for="telephone">Password</label>
                                <input class="form-control" type="text" name="telephone" value="{{ $p->password }}">
                        </div>
                        <a href="{{ url('/home') }}"  class="btn btn-success "> Kembali</a>
                    @endforeach
                    <br/>
                 
                </div>


            </div>
        </div>
    </div>
</div>

@endsection
