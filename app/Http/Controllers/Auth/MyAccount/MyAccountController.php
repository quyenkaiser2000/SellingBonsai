<?php

namespace App\Http\Controllers\Auth\MyAccount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\User;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
class MyAccountController extends Controller
{
    
    public function show($id){
        $user = User::findOrFail($id);
        $products = Product::all();
        $productcategory = ProductCategory::all();
        $productbrands = Brand::all();
        return view('auth.myaccount.index',compact('user','products','productcategory','productbrands'));
    }

    
    
    
}
