@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <h3 class="mt-4">Edit category</h3>
        <div class="row mt-4">
            <div class="col-6">
                <form action="{{route('category.update', $category->id)}}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="form-group ">
                        <input type="text" class="form-control"

                               value="{{$category->title}}" name="title"
                               placeholder="Type category"/>

                        @error('title')
                        <span class="text-danger mt-3">{{$message}}</span>

                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Edit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Page content wrapper-->

@endsection
