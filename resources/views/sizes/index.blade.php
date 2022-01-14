@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div>
            <div class="col-4 ">
                <a href="{{route('size.create')}}" class="btn btn-outline-dark">Add Size</a>
            </div>
            <div class="size-table mt-4 col-8">
                <table class="table table-light">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Size</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

                    </tr>
                    </thead>
                    @foreach($sizes as $size)
                        <tbody>
                        <tr>
                            <th scope="row">{{$size->id}}</th>
                            <td>{{$size->size}}</td>
                            <td><a href="{{route('size.edit', $size->id)}}"><i class="fas fa-pen"></i></a></td>
                            <td>
                                <form action="{{route('size.delete', $size->id)}}" method="POST">
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
