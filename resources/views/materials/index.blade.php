@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div>
            <div class="col-4 ">
                <a href="{{route('material.create')}}" class="btn btn-outline-dark">Add material</a>
            </div>
            <div class="material-table mt-4 col-8">
                <table class="table table-light">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Material</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

                    </tr>
                    </thead>
                    @foreach($materials as $material)
                        <tbody>
                        <tr>
                            <th scope="row">{{$material->id}}</th>
                            <td>{{$material->type}}</td>
                            <td><a href="{{route('material.edit', $material->id)}}"><i class="fas fa-pen"></i></a></td>
                            <td>
                                <form action="{{route('material.delete', $material->id)}}" method="POST">
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
