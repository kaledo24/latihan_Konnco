@extends('layout.v_temp')

@section('conten')
<!-- Main content -->

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Produk</h3>
            </div>

            <!-- /.card-header -->
            <div class="card-header">
                <button class="btn btn-primary"> tambah </button>
                <button class="btn btn-info"> report </button>
            </div>
            <div class="card-body">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th>Tanggal Pembuatan</th>
                    <th>Nama Barang</th>
                    <th>Status</th>
                    <th>Harga</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1.</td>
                    <td>isi tanggal</td>
                    <td>isi nama</td>
                    <td>Isi status </td>
                    <td>Rp 12.000</td>
                </tr>
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
            </div>
        </div>
        <!-- /.card -->
    </div>


</section>
<!-- /.content -->

@endsection
