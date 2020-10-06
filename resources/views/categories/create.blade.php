@extends('layouts.app')
@section('content')
    <div class="card card-default">
        <div class="card-header">
            Create Category
        </div>
        <div class="card-body">
        <form action="{{route('categories.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Name ddddsdf</label>
                    <p>dfsdfsad</p>
                    <input type="text" name="name" value="" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="" value="Add Category" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
