@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div>
            <div class="col-4 ">
                <a href="{{route('category.create')}}" class="btn btn-outline-dark">Add category</a>
            </div>
            <div class="category-table mt-4 col-8">
                <table class="table table-light">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Category</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

                    </tr>
                    </thead>
                    @foreach($categories as $category)
                        <tbody>
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td>{{$category->title}}</td>
                            <td><a href="{{route('category.edit', $category->id)}}"><i class="fas fa-pen"></i></a></td>
                            <td>
                                <form action="{{route('category.delete', $category->id)}}" method="POST">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="border-0 bg-transparent">
                                        <i class="far fa-trash-alt text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        </tbody>
                    @endforeach

                </table>
            </div>

        </div>
    </div>
</div>
    <!-- Page content wrapper-->

@endsection
