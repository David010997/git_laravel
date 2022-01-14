@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <h3 class="mt-4">Add color</h3>
        <div class="row mt-4">
            <div class="col-6">
                <form action="{{route('color.store')}}" method="POST">
                    @csrf
                    <div class="form-group ">
                        <input type="text" class="form-control" value="{{old('color')}}" name="color"
                               placeholder="Type color"/>
                        @error('color')
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
