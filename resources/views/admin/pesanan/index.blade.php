@extends('layouts.index')
@section('content')
<div class="col-md-12 d-flex flex-row justify-content-end">
    <a class="btn btn-success" href="{{ route('pesanan.create') }}"> Input Kategori Catering</a>
</div>
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Kategori Catering</h3><br>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>  
            <div class="card-body">
                <table class="table">
                <thead>
                    <tr>
                        <th>ID Kategori</th>
                        <th>Nama Kategori</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pesanans as $p)
                        <tr>
                            <td>{{ $p -> idPesanan}}</td>
                            <td>{{ $p -> namaKategori}}</td>
                            
                            <td>
                                <form action="{{ route('pesanan.destroy',$k->idPesanan) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('pesanan.show',$k->idPesanan) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('pesanan.edit',$k->idPesanan) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <!-- <div class="card-footer">
                --
            </div> -->
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
@endsection
