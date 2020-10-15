<!DOCTYPE html>
@extends('layouts.blog')
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    @section('title')
        CMS Tutorial
    @endsection


</head>

<body>

    @section('header')

        <!-- Header -->
        <header class="header text-center text-white site-blocks-cover inner-page overlay aos-init aos-animate site-wrap"
            style="background-image: linear-gradient(-225deg, #1b1b1b 0%, #1b1b1b 48%, #1b1b1b 100%);">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <h1>Laravel Framework Workshop</h1>
                        <p class="lead-2 opacity-90 mt-3">Kong Ruksiam Studio</p>
                    </div>
                </div>

            </div>
        </header><!-- /.header -->
    @endsection
    @section('content')

        <!-- Main Content -->
        <main class="main-content">
            <div class="pt-5 bg-gray site-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-xl-9">
                            <div class="row gap-y">
                                @forelse ($posts as $post)
                                    <div class="col-md-6">
                                        <div class="card border hover-shadow-6 mb-6 d-block">
                                            <a href="{{ route('blog.show', $post->id) }}"><img class="card-img-top"
                                                    src="storage/{{ $post->image }}" alt="Card image cap"></a>
                                            <div class="p-6 text-center">
                                                <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400"
                                                        href="{{ route('blog.category', $post->category->id) }}">{{ $post->category->name }}</a>
                                                </p>
                                                <h5 class="mb-0"><a class="text-dark"
                                                        href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p class="text-center">NO Result: <strong>{{ Request()->query('search') }}</strong></p>

                                @endforelse
                            </div>
                            <div class="text-center">
                                {{ $posts->appends(['search' => Request()->query('search')])->links() }}
                            </div>
                        </div>
                        @include('layouts.sidebar')
                    </div>
                </div>
            </div>
            <div class="container site-wrap bg-dark">
                <div class="site-wrap">
                    @include('layouts.footer')
                </div>
            </div>
        </main>
    @endsection

</body>

</html>
