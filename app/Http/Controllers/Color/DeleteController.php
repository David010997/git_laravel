<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Colors\StoreRequest;
use App\Http\Requests\Colors\UpdateRequest;
use App\Models\Color;

class DeleteController extends Controller
{
    public function __invoke(Color $color)
    {
        $color->delete();
        return redirect()->route('color.index');
    }
}
