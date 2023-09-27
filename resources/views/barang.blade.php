@extends('dashboard')
@section('table')
<div class="row mt-4">
  <div class="col-md-6 col-sm-6 text-left">

    <h2>Barang </h2>

  </div>
  <div class="col-md-6 col-sm-6 text-right">
 
  </div>
</div>

<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Barang
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Suplier</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
    ?>
@foreach($barangs as $barang)
    <tr>
      <td scope="col">{{$i}}</td>
      <td scope="col">{{$barang->nama_barang}}</th>
      <td scope="col">{{$barang->harga}}</th>
      <td scope="col">{{$barang->stok}}</th>
      <td scope="col">{{$barang->id_suplier}}</th>
      <td scope="col">
          <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
        <a  class="btn btn-sm btn-outline-primary">Edit</a>
      </td>
    </tr>
    <?php
    $i++
    ?>
@endforeach
  </tbody>
</table>

<div class="modal fade" id="exampleModal" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mt-4 mb-3">
        </div>
        <form class="form-horizontal form-material" method="POST"  enctype="multipart/form-data">
          @csrf
          <div class="container mt-4">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Kategori</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="kategori" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Judul</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Mentor</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="mentor" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Link youtube</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="youtube" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Ringkasan matei</label>
              <input type="file" class="form-control" id="exampleFormControlInput1" name="ringkasan" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Kirim</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>

@endsection