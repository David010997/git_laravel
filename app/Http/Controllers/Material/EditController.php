<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Http\Requests\Colors\StoreRequest;
use App\Models\Color;
use App\Models\Material;

class EditController extends Controller
{
    public function __invoke(Material $material)
    {
        return view('materials.edit', compact('material'));
    }
}
