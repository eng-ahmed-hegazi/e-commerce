@extends('layouts.app')
@section('content')
    @include('admin.includes.errors')
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add Product
        </div>
        <div class="panel-body">
            <form action="{{route('categories.update',$categories->id)}}" class="form" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="Name">CATEGORY NAME*</label>
                    <input type="text" name="name" id="Name" value="{{$categories->name}}" placeholder="enter Name" class="form-control">
                </div>

                <div class="form-group text-center">
                    <input class="btn btn-success" type="submit" value="Edit Category">
                </div>
            </form>
        </div>
    </div>
@endsection
