<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public static $categories;
    public static function newCategory($data){
        self::$categories = new Category();
        self::$categories -> name           = $data -> name;
        self::$categories -> description    = $data -> description;
        self::$categories -> image          = saveImage($data);
        self::$categories -> status         = $data -> status;
        self::$categories -> save();
    }

    public static function saveImage($image){

    }

}
