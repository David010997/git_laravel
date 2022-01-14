<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'products';
    protected $guarded = false;

    const GENDER_MALE = 0;
    const GENDER_FEMALE = 1;
    const GENDER_UNISEX = 2;

    public static function getProductGender () {
        return [
            self::GENDER_MALE => 'MALE',
            self::GENDER_FEMALE => 'FEMALE',
            self::GENDER_UNISEX => 'UNISEX'
        ];
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function material()
    {
        return $this->belongsTo(Material::class);
    }


}
