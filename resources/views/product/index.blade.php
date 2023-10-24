@extends('product.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD (Create, Read, Update and Delete) with Image Upload</h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-success" href="{{ url('create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama produk</th>
            <th>Jenis</th>
            <th>Deskripsi</th>
            <th>Cacat</th>
            <th>Stok</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($product as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/img/{{ $item->gambar }}" width="100px"></td>
            <td>{{ $item->product_name }}</td>
            <td>{{ $item->jenis }}</td>
            <td>{{ $item->kondisi }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->cacat }}</td>
            <td>{{ $item->stok }}</td>

            <td>
                <form action="{{ route('destroy',$item->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('edit',$item->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $product->links() !!}
    
@endsection