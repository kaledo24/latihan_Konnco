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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_tambah"> Tambah </button>
                <button class="btn btn-info"> Report </button>
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

<div class="modal fade" id="m_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah produk</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">

        <div class="row mb-3">
            <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label-sm">Nama Produk</label>
            <div class="col-sm-7">
                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Nama Produk">
            </div>
        </div>

        <div class="row mb-3">
            <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label-sm">Harga Produk</label>
            <div class="col-sm-7">
                <input type="number" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Harga Produk">
            </div>
        </div>

        <div class="row mb-3">
            <label for="colFormLabelSm" class="col-sm-5 col-form-label col-form-label-sm">status</label>
            <div class="col-sm-7">
                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Status Produk">
            </div>
        </div>

        <div class="row mb-3">
            <label for="colFormLabelSm" class="col-sm-5 col-form-label ">tanggal pembuatan</label>
            <div class="col-sm-7">
                <input type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="tanggal pembuatan">
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

@endsection
