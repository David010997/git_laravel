@extends('layouts.main')
@section('content')

    <section class="modelinfo-section mt-4">
        <div class="container-fluid">
            <h2 class="text-center">ModelInfo</h2>
            <table class="table table-borderless mt-4">
                <thead>
                <tr style="border-bottom:1px solid lightgrey;">
                    <th scope="col">Product</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Material</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>

                </thead>

                <tbody>

                @foreach($products as $product)
                    <tr>
                        <td class="d-flex">
                            <div><img class="product_image" style="width: 50px;height: 50px;"
                                      src="{{asset('storage/' . $product->product_image)}}"
                                      alt="img">

                            </div>
                            <div><span style="margin-left:20px;">{{$product->title}}</span></div>
                        </td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->category->title}}</td>
                        <td>{{$product->material->type}}</td>
                        <td>{{($product->gender=== 0) ? ('male') : (($product->gender===1) ? ('female') : ( 'unisex'))}}</td>
                        <td><a href="{{route('product.edit', $product->id)}}"><i class="fas fa-pen"></i></a></td>
                        <td>
                            <form action="{{route('product.delete', $product->id)}}" method="POST">
                                @csrf
                                @method("delete")
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="far fa-trash-alt text-danger"></i>
                                </button>
                            </form>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </section>


@endsection
