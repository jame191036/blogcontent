@extends('layouts.app')
@section('content')
    <div class="card card-default">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item">{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-header">
           {{isset($tag) ? "Edit Tag" : "Create Tag"}}
        </div>
        <div class="card-body">
            <form action="{{isset($category) ? route('tags.update',$tag->id) : route('tags.store')}}" method="post">
                @csrf
                @if (isset($category))
                    @method('put')
                @endif
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{isset($tag) ? $tag->name : ''}}" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="" value="{{isset($category) ? "Update Tag" : "Add Tag"}}" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
