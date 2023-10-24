<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = [
        'product_name',
        'jenis',
        'kondisi', // baik, layak, rusak
        'description',
        'cacat',
        'stok',
        'gambar'
    ];
    
    public function product() 
    {
        return $this->hasMany(Product::class);
    }

}


