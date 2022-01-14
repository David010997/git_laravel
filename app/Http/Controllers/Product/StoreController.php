<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Products\StoreRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        try {
            $data = $request->validated();
            if (isset($data['product_image'])) {
                $data['product_image'] = Storage::disk('public')->put('/images', $data['product_image']);
            }
            $colorId = $data['color_ids'];
            unset($data['color_ids']);
            $sizeId = $data['size_ids'];
            unset($data['size_ids']);
            $product = Product::firstOrCreate($data);
            $product->colors()->attach($colorId);
            $product->sizes()->attach($sizeId);
            return redirect()->route('product.index');
        }
        catch (\Exception $exception) {
            abort(404);
        }
    }
}
