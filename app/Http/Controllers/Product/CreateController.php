<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Material;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $materials = Material::all();
        $colors = Color::all();
        $sizes = Size::all();
        $gender_types = Product::getProductGender();
        return view('products.create', compact('categories', 'materials', 'colors', 'sizes', 'gender_types'));
    }
}
