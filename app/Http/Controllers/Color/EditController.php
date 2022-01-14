<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Colors\StoreRequest;
use App\Models\Color;

class EditController extends Controller
{
    public function __invoke(Color $color)
    {
        return view('colors.edit', compact('color'));
    }
}
