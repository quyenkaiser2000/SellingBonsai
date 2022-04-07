<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
    public function productCategory(){
        return $this->belongsTo(ProductCategory::class,'product_category_id','id');
    }
    public function productImage(){
        return $this->hasMany(ProductImage::class,'product_id','id');
    }
    public function orderDetails(){
        return $this->hasMany(OrderDetail::class,'product_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function productcomments(){
        return $this->hasMany(ProductComment::class,'product_id','id');
    }
}
