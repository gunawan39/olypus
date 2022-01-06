@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Data Customer
                </div>

                <div class="card-body">
                
                    @foreach($customer as $p)
                    <form action="update" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $p->id }}"> <br/>

                        <div class="form-group">
                                <label for="pekerjaan">Nama</label>
                                <input class="form-control" type="text" name="nama" value="{{ $p->nama }}">
                        </div>
                        <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input class="form-control" type="text" name="alamat" value="{{ $p->alamat }}">
                        </div>
                        <div class="form-group">
                                <label for="telephone">Nomor Telephone</label>
                                <input class="form-control" type="number" name="telephone" value="{{ $p->nomor_telephone }}">
                        </div>

                        <div class="form-group">
                                <label for="tanggal">Tanggal Registrasi</label>
                                <input class="form-control" type="datetime-local" name="tanggal" value="{{ $p->tanggal_registrasi }}">
                        </div>
                        <input type="submit" class="btn btn-success " value="Update">
                    </form>
                    @endforeach
                    
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
