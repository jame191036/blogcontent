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
            Create Post
        </div>
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Description</label>
                    <textarea name="description" id="" cols="4" rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="title">Content</label>
                    <textarea name="content" id="" cols="8" rows="8" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="title">Image</label>
                    <input type="file" name="image" id="" class="form-control" >
                </div>
                <div class="form-group">
                    <input type="submit" name="" id="" value="Create Post" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
