<?php

namespace App\Http\Controllers\Size;

use App\Http\Controllers\Controller;
use App\Http\Requests\Colors\StoreRequest;
use App\Http\Requests\Colors\UpdateRequest;
use App\Models\Size;

class DeleteController extends Controller
{
    public function __invoke(Size $size)
    {
        $size->delete();
        return redirect()->route('size.index');
    }
}
