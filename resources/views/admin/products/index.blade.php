@extends('layouts.app')
@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            PRODUCTS
        </div>
        <div class="panel-body">
            <table class="table table-hover table-striped table-bordered">
                <tr>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>IMAGE</th>
                    <th>DESCRIPTION</th>
                    <th class="text-center">EDIT</th>
                    <th class="text-center">DELETE</th>
                </tr>
                @foreach($products as $product)
                    <tr class="text-center">
                        <td class="text-left">{{$product->name}}</td>
                        <td class="text-left">{{$product->price}}</td>
                        <td class="text-left">
                            <img src="{{asset($product->image)}}" alt="image" width="40" height="40">
                        </td>
                        <td class="text-left">{{str_limit($product->description,50)}}</td>
                        <td><a href="{{route('products.edit',$product->id)}}" class="btn btn-info btn-xs">Edit</a></td>
                        <td>
                            <form action="{{route('products.destroy',$product->id)}}" class="form"
                                  method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class="btn btn-danger btn-xs" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
    <div class="text-center">
        {{$products->render()}}
    </div>
@endsection
