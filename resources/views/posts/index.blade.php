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
                            <td></td>
                            <td>{{$post->title}}</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm">Edit</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('.delete_form').on('submit', function() {
                if (confirm("You want to delete?")) {
                    return true;
                } else {
                    return false;
                }
            });
        });

    </script> --}}
@endsection
