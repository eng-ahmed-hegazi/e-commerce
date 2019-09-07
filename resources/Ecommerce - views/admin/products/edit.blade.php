@extends('layouts.app')
@section('content')
    @include('admin.includes.errors')
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add Product
        </div>
        <div class="panel-body">
            <form action="{{route('products.update',$products->id)}}" class="form" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="Name">PRODUCT NAME*</label>
                    <input type="text" name="name" id="Name" value="{{$products->name}}" placeholder="enter Name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="Price">PRODUCT PRICE*</label>
                    <input type="number" name="price" id="Price" value="{{$products->price}}" placeholder="enter Price" class="form-control">
                </div>

                <div class="form-group">
                    <label for="image">PRODUCT IMAGE*</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="form-group">
                    <label for="Description">PRODUCT DESCRIPTION*</label>
                    <textarea name="description" id="Description" cols="30" rows="10" class="form-control" placeholder="enter description">
                        {{$products->description}}
                    </textarea>
                </div>

                <div class="form-group text-center">
                    <input class="btn btn-success" type="submit" value="Edit Product">
                </div>
            </form>
        </div>
    </div>
@endsection
