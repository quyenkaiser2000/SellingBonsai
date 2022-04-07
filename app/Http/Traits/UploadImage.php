<?php
namespace App\Traits;
use Carbon\Carbon;
use Storage;
use Image;

 trait UploadImage{
     public function InsertImage($image,$name,$size,$disk='public'){
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $name.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            foreach($size as $key=>$item){
                if(!Storage::disk($disk)->exists($key)){
                    Storage::disk($disk)->makeDirectory($key);
                }
                $temp_image = Image::make($image)->fit($item['width'],$item['height'])->stream();
                Storage::disk($disk)->put($key.'/'.$imageName,$temp_image);
            }
            return $imageName;
        }else{
            return null;
     }
 }
 ?>
 