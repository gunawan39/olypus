@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')
@include('sweetalert::alert')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Dashboard</h2> 

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4> Slamat Datang </h4>
                   <!-- <h4> Data Companies </h4>
		
                  <a href="company/tambah"  class="btn btn-success "> + Tambah</a>
                   <a href="company/cetak_pdf" class="btn btn-primary" target="_blank">Cetak pdf</a>
                    <br>
                    <br>

                    Total Data : {{ $companies->total() }} <br/>
                    <table class='table table-bordered'>
                        <tr>
                            <th align="center" >No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Website</th>
                            <th>Opsi</th>
                        </tr>
                        @php $i=1 @endphp
                        @foreach($companies as $p)
                        <tr>
                            <td align=center>{{ $i++ }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->website }}</td>
                            <td>
                            <a href="company/edit/{{ $p->id }}"  class="btn btn-success">  Edit</a>
                                <button type="button" onclick="deleteItem({{ $p->id }})" id="Reco" class="btn btn-danger">Delete</button>         
                       
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <br/>
                    Page : {{ $companies->currentPage() }} <br/>
                    {{ $companies->links() }} -->
                </div>


            </div>
        </div>
    </div>
</div>

<script>
function deleteItem(id) {
    $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({ 
            type: "get", 
            url: 'company/hapus/'+id,               
            dataType: "JSON",
            success: function(data) {
           
                if(data.message == 200){
                    // toastr.success("Berhasil Hapus data");
                   
                    toastr.success(
                        'Berhasil Hapus data ',
                        {
                            timeOut: 1000,
                        },
                        location.reload(),
                    );

                }
                    
            }
        });          
    }
</script>
@endsection
