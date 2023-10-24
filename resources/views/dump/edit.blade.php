@extends('product.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">
        Edit Product
    </div>
    <div class="card-body">
        <form action="{{ url('product/' .$product->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />
            
            <label>Name</label></br>
            <input type="text" name="product_name" id="product_name" value="{{$product->product_name}}" class="form-control"></br>
            
            <label>Jenis</label></br>
            <input type="text" name="jenis" id="jenis" value="{{$product->jenis}}" class="form-control"></br>
            
            <label>Kondisi</label></br>
            <input type="text" name="kondisi" id="kondisi" value="{{$product->kondisi}}" class="form-control"></br>
            
            <label>Keterangan barang</label></br>
            <input type="text" name="description" id="description" value="{{$product->description}}" class="form-control"></br>
            
            <label>Kecacatan barang</label></br>
            <input type="text" name="cacat" id="cacat" value="{{$product->cacat}}" class="form-control"></br>
            
            <label>Stok</label></br>
            <input type="number" name="stok" id="stok" value="{{$product->stok}}" class="form-control"></br>
            
            <label>Gambar</label></br>
            <input type="image" name="name" id="name" value="{{$product->gambar}}" class="form-control"></br>

            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>
</div>

@stop