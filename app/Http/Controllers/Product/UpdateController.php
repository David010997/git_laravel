<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Products\StoreRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class UpdateController extends Controller
{
    public function __invoke(Product $product, StoreRequest $request)
    {
        try {
            $data = $request->validated();
            $data['product_image'] = Storage::disk('public')->put('/images', $data['product_image']);
            $colorId = $data['color_ids'];
            unset($data['color_ids']);
            $sizeId = $data['size_ids'];
            unset($data['size_ids']);
            $product->update($data);
            $product->colors()->sync($colorId);
            $product->sizes()->sync($sizeId);

            return redirect()->route('product.index');
        } catch (\Exception $exception) {
            abort(404);
        }
    }
}
