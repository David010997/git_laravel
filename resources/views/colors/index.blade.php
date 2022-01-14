@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div>
            <div class="col-4 ">
                <a href="{{route('color.create')}}" class="btn btn-outline-dark">Add Color</a>
            </div>
            <div class="color-table mt-4 col-8">
                <table class="table table-light">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Color</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

                    </tr>
                    </thead>
                    @foreach($colors as $color)
                        <tbody>
                        <tr>
                            <th scope="row">{{$color->id}}</th>
                            <td>{{$color->color}}</td>
                            <td><a href="{{route('color.edit', $color->id)}}"><i class="fas fa-pen"></i></a></td>
                            <td>
                                <form action="{{route('color.delete', $color->id)}}" method="POST">
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
