@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <h3 class="mt-4">Add size</h3>
        <div class="row mt-4">
            <div class="col-6">
                <form action="{{route('size.store')}}" method="POST">
                    @csrf
                    <div class="form-group ">
                        <input type="text" class="form-control" value="{{old('size')}}" name="size"
                               placeholder="Type size"/>
                        @error('size')
                        <span class="text-danger mt-3">{{$message}}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Add</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Page content wrapper-->

@endsection
