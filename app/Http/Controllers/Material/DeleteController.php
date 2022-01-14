<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;

use App\Models\Material;

class DeleteController extends Controller
{
    public function __invoke(Material $material)
    {
        $material->delete();
        return redirect()->route('material.index');
    }
}
