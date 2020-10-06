@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{route('categories.create')}}" class="btn btn-success">Add Category</a>
    </div>
    <div class="card card-default">
        <div class="card-header">
             Category
        </div>
        <div class="catd-body">
            <table class="table table-hover mb-0">
                <thead>
                    <th>Name</th>
                </thead>
                <tbody>
                    @foreach ($categoies as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
