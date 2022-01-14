@extends('layouts.main')
@section('content')


    <section class="product-create-section mt-4">
        <div class="container-fluid">
            <h2>Add product</h2>
            <div class="row mt-4">
                <div class="col-6">
                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{old('title')}}" name="title"
                                   placeholder="Type title"/>
                            @error('title')
                            <span class="text-danger mt-3">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group  mt-3">
                            <input type="text" class="form-control" value="{{old('description')}}" name="description"
                                   placeholder="Type description"/>
                            @error('description')
                            <span class="text-danger mt-3">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-select" aria-label="Default select example" name="gender">
                                @foreach($gender_types as $id=>$gender)
                                    <option value='{{$id}}'>{{$gender}}</option>

                                @endforeach

                            </select>
                            @error('gender')
                            <span class="text-danger mt-3">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-select" aria-label="Default select example" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach

                            </select>
                            @error('category_id')
                            <span class="text-danger mt-3">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-select" aria-label="Default select example" name="material_id">
                                @foreach($materials as $material)
                                    <option value="{{$material->id}}">{{$material->type}}</option>
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
                                    <option value="{{$color->id}}">{{$color->color}}</option>
                                @endforeach
                            </select>
                            @error('color_ids')
                            <span class="text-danger mt-3">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-select" multiple aria-label="multiple select example" name="size_ids[]">

                                @foreach($sizes as $size)
                                    <option value="{{$size->id}}">{{$size->size}}</option>
                                @endforeach
                            </select>
                            @error('size_ids')
                            <span class="text-danger mt-3">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <div class="fileUpload btn btn-outline-danger">
                                <span>Upload image</span>
                                <input id="uploadBtn" name="product_image" type="file" class="upload"/>
                            </div>
                            @error('product_image')
                            <span class="text-danger mt-3">{{$message}}</span>
                            @enderror
                        </div>

                        <button class="btn btn-primary mt-3" type="submit">Add Product</button>

                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection
