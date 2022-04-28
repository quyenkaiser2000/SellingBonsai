<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
    
    use HasFactory;
    protected $table = 'discount_code';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function orders(){
        return $this->hasMany(Order::class,'discount_code_id','id');
    }
}
