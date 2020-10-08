@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('posts.create') }}" class="btn btn-success">Add post</a>
    </div>
    <div class="card card-default">
        <div class="card-header">
            post
        </div>
        <div class="catd-body">
            @if ($posts->count()>0)
            <table class="table table-hover mb-0">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                            <img src="storage/{{$post->image}}" alt="" width="80px" height="80px">
                            </td>
                            <td>{{$post->title}}</td>
                            <td>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm">Edit vbvb</a>
                            </td>
                            <td>
                                <form class="delete_form" action="{{route('posts.destroy', $post->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" name="" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            @else
                <h3 class="text text-center pt-2"> No Post</h3>
            @endif
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.delete_form').on('submit', function() {
                if (confirm("You want to delete?")) {
                    return true;
                } else {
                    return false;
                }
            });
        });

    </script>
@endsection
