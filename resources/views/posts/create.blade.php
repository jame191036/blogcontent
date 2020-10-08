@extends('layouts.app')
@section('content')
    <div class="card card-default">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-header">
            {{ isset($post) ? 'Edit post' : 'Create post' }}
        </div>
        <div class="card-body">
            <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @if (isset($post))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="" value="{{ isset($post) ? $post->title : '' }}"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Description</label>
                    <textarea name="description" id="" cols="4" rows="4" class="form-control">
                    {{ isset($post) ? $post->description : '' }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="title">Content</label>
                    {{-- {{ $post->content }} --}}
                    <input id="x" value="" type="hidden" name="content" value="{{ isset($post) ? $post->content : '' }}">
                    <trix-editor input="x"></trix-editor>
                </div>
                <div class="form-group">
                    <label for="title">Image</label>
                    <input type="file" name="image" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Category</label>
                    <select name="category" id="" class="form-control">
                        @foreach ($categorie as $category)
                            <option value="{{ $category->id }}" @if (isset($post))
                                @if ($category->id == $post->category_id)
                                    selected
                                @endif
                        @endif
                        >{{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="" id="" value="{{ isset($post) ? 'Update post' : 'Create post' }}"
                        class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
    {{-- <div id="summernote"></div> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.css">
    <script>
        // $('#summernote').summernote({
        //   placeholder: 'Hello stand alone ui',
        //   tabsize: 2,
        //   height: 120,
        //   toolbar: [
        //     ['style', ['style']],
        //     ['font', ['bold', 'underline', 'clear']],
        //     ['color', ['color']],
        //     ['para', ['ul', 'ol', 'paragraph']],
        //     ['table', ['table']],
        //     ['insert', ['link', 'picture', 'video']],
        //     ['view', ['fullscreen', 'codeview', 'help']]
        //   ]
        // });

    </script>
@endsection
