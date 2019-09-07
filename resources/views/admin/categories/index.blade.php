@extends('layouts.app')
@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            CATEGORIES
        </div>
        <div class="panel-body">
            <table class="table table-hover table-striped table-bordered">
                <tr>
                    <th>NAME</th>
                    <th class="text-center">EDIT</th>
                    <th class="text-center">DELETE</th>
                </tr>
                @foreach($categories as $category)
                    <tr class="text-center">
                        <td class="text-left">{{$category->name}}</td>
                        <td><a href="{{route('categories.edit',$category->id)}}" class="btn btn-info btn-xs">Edit</a></td>
                        <td>
                            <form action="{{route('categories.destroy',$category->id)}}" class="form"
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
        {{$categories->render()}}
    </div>
@endsection
