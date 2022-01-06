@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Customer
                </div>

                <div class="card-body">
             
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                
                    <form action="store" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                        </div>
                        <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input class="form-control" type="text" name="alamat" value="{{ old('alamat') }}">
                        </div>
                        <div class="form-group">
                                <label for="telephone">Nomor Telephone</label>
                                <input class="form-control" type="number" name="telephone" value="{{ old('telephone') }}">
                        </div>
                  
                        <input type="submit" class="btn btn-success " value="Simpan Data">
                    </form>
                    
                </div>


            </div>
        </div>
    </div>
</div>

@endsection
