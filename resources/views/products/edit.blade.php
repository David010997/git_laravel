@extends('layouts.main')
@section('content')


    <section class="product-create-section mt-4">
        <div class="container-fluid">
            <h2>Add product</h2>
            <div class="row mt-4">
                <div class="col-6">
                    <form action="{{route('product.update', $product->id)}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$product->title}}" name="title"
                                   placeholder="Type title"/>
                            @error('title')
                            <span class="text-danger mt-3">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group  mt-3">
                            <input type="text" class="form-control" value="{{$product->description}}" name="description"
                                   placeholder="Type description"/>
                            @error('description')
                            <span class="text-danger mt-3">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-select" aria-label="Default select example" name="gender">
                                @foreach($gender_types as $id=>$gender)
                                    <option
                                        {{$id == $product->gender ? 'selected' : ''}} value='{{$id}}'>{{$gender}}</option>
                                @endforeach

                            </select>
                            @error('gender')
                            <span class="text-danger mt-3">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-select" aria-label="Default select example" name="category_id">
                                @foreach($categories as $category)
                                    <option
                                        {{$category->id == $product->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach

                            </select>
                            @error('category_id')
                            <span class="text-danger mt-3">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-select" aria-label="Default select example" name="material_id">
                                @foreach($materials as $material)
                                    <option
                                        {{$material->id == $product->material_id ? 'selected' : ''}} value="{{$material->id}}">{{$material->type}}</option>
                                @endforeach

                            </select>
                            @error('material_id')
                            <span class="text-danger mt-3">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-select" multiple aria-label="multiple select example"
                                    name="color_ids[]">

                                @foreach($colors as $color)
                                    <option @foreach($product->colors as $productColor)
                                            {{$productColor->color === $color->color ? 'selected' : ''}}
                                            @endforeach
                                            value="{{$color->id}}">{{$color->color}}</option>
                                @endforeach
                            </select>
                            @error('color_ids')
                            <span class="text-danger mt-3">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-select" multiple aria-label="multiple select example" name="size_ids[]">

                                @foreach($sizes as $size)
                                    <option @foreach($product->sizes as $productSize)
                                            {{$productSize->size === $size->size ? 'selected' : ''}}
                                            @endforeach
                                            value="{{$size->id}}">{{$size->size}}</option>
                                @endforeach
                            </select>
                            @error('size_ids')
                            <span class="text-danger mt-3">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group mt-4 d-flex">
                            <div>
                                <img style="height: 100px; width: 100px;"
                                     src="{{asset('storage/' . $product->product_image)}}" alt="image">
                            </div>
                            <div style="margin-left: 20px;" class="d-flex align-items-center"><input value="{{$product->product_image}}" type="file" class="custom-file-input" name="product_image"></div>
                            @error('product_image')
                            <span class="text-danger mt-3">{{$message}}</span>
                            @enderror
                        </div>

                        <button class="btn btn-primary mt-3 mb-5" type="submit">Edit Product</button>

                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection
