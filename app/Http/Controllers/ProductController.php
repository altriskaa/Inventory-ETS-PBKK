<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::paginate(10);
        
        /**
        return view('product.index', ['product' => $product]);
         */
        return view('product.index', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request->validate([
            'product_name' => 'required',
            'jenis' => 'required',
            'kondisi' => 'required',
            'description' => 'required',
            'cacat' => 'required',
            'stok' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $input = $request->all();
        
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $gambar);
            $input['gambar'] = "$gambar";
        }
        Product::create($input);
        return redirect('product')->with('flash_message', 'Product Addedd!');      
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show')->with('product', $product);    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required',
            'jenis' => 'required',
            'kondisi' => 'required',
            'description' => 'required',
            'cacat' => 'required',
            'stok' => 'required',
        ]);
        
        $input = $request->all();
        
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $gambar);
            $input['gambar'] = "$gambar";
        }else{
            unset($input['gambar']);
        }
        
        $product->update($input);
        
        return redirect('product')->with('flash_message', 'Product Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        return redirect('product')->with('flash_message', 'Product deleted!');
    }
}
