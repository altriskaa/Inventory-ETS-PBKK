@extends('product.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Product</div>
  <div class="card-body">
      <form action="{{ url('product') }}" method="post">
        {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="product_name" id="product_name" class="form-control"></br>
            
            <label>Jenis</label></br>
            <input type="text" name="jenis" id="jenis" class="form-control"></br>
            
            <label>Kondisi</label></br>
            <input type="text" name="kondisi" id="kondisi" class="form-control"></br>
            
            <label>Keterangan barang</label></br>
            <input type="text" name="description" id="description" class="form-control"></br>
            
            <label>Kecacatan barang</label></br>
            <input type="text" name="cacat" id="cacat" class="form-control"></br>
            
            <label>Stok</label></br>
            <input type="number" name="stok" id="stok" class="form-control"></br>
            
            <label>Gambar</label></br>
            <input type="image" name="name" id="name" class="form-control"></br>
    </form>
    
  </div>
</div>
  
@stop