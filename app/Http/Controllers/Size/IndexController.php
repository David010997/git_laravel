<?php

namespace App\Http\Controllers\Size;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Size;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $sizes = Size::all();
        return view('sizes.index', compact('sizes'));
    }
}
