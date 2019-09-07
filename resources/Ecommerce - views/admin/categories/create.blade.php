@extends('layouts.app')
@section('content')
    @include('admin.includes.errors')
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add Product
        </div>
        <div class="panel-body">
            <form action="{{route('categories.store')}}" class="form" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="Name">CATEGORY NAME*</label>
                    <input type="text" name="name" id="Name" placeholder="enter Name" class="form-control">
                </div>
                <div class="form-group text-center">
                    <input class="btn btn-success" type="submit" value="Add Category">
                </div>
            </form>
        </div>
    </div>
@endsection
