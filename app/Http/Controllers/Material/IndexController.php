<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Material;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $materials = Material::all();
        return view('materials.index', compact('materials'));
    }
}
