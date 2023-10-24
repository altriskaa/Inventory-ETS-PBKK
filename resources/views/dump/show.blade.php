@extends('product.layout')
@section('content')
  
<div class="card" style="margin:20px;">
    <div class="card-header">
        Product Page
    </div>
        <div class="card-body">
            <div class="card-body">
            <h5 class="card-title">Name : {{ $product->product_name }}</h5>
            <p class="card-text">Jenis : {{ $product->jenis }}</p>
            <p class="card-text">Kondisi : {{ $product->kondisi }}</p>
            <p class="card-text">Keterangan barang : {{ $product->description }}</p>
            <p class="card-text">Kecacatan : {{ $product->cacat }}</p> 
            <p class="card-text">Stok : {{ $product->stok }}</p>
            <p class="card-text">Gambar : {{ $product->gambar }}</p>
        </div>
        
    </hr>
    </div>
</div>