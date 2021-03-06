<!DOCTYPE html>
@extends('layouts.blog')
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    @section('title')
        {{ $post->title }}
    @endsection
</head>

<body>
    @yield('showblog')
    @section('header')
        <div class="container site-wrap">
            <div class="site-blocks-cover inner-page overlay"
                style="background-image: url(../../storage/{{ $post->image }});" data-aos="fade"
                data-stellar-background-ratio="0.5">
                <div class="row align-items-center justify-content-center mr-0">
                    <div class="col-md-12 col-xl-12 text-center" data-aos="fade">
                        <h1 class="text-uppercase">{{ $post->title }}</h1>
                        <span class="caption d-block text-white">{{ $post->updated_at->format('d/M/Y') }} &bullet; Posted By
                            <a href="#">{{ $post->user->name }}</a></span>
                    </div>
                </div>
            </div>
        </div>
        {{-- <header class="header text-white h-fullscreen pb-80"
            style="background-image: url('../../storage/{{ $post->image }}');" data-overlay="9">
            <div class="container text-center">

                <div class="row h-100">
                    <div class="col-lg-8 mx-auto align-self-center">

                        <p class="opacity-70 text-uppercase small ls-1">{{ $post->category->name }}</p>
                        <h1 class="display-4 mt-7 mb-8">{{ $post->title }}</h1>
                        <p><span class="opacity-70 mr-1">By</span> <a class="text-white"
                                href="#">{{ $post->user->name }}</a></p>
                        <p><img class="avatar avatar-sm" src="{{ Gravatar::src($post->user->email) }}"
                                alt="{{ $post->user->name }}"></p>

                    </div>

                    <div class="col-12 align-self-end text-center">
                        <a class="scroll-down-1 scroll-down-white" href="#section-content"><span></span></a>
                    </div>

                </div>

            </div>
        </header> --}}
    @endsection

    @section('content')
        {{-- <div class="section" id="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        {!! $post->content !!}
                        <div class="gap-xy-2 mt-6">
                            @foreach ($post->tags as $tag)
                                <a class="badge badge-pill badge-secondary"
                                    href="{{ route('blog.tag', $tag->id) }}">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        <hr>
                        <div id="disqus_thread"></div>
                        <script>
                            var disqus_config = function() {
                                this.page.url =
                                    "{{ config('app.url') }}/blog/posts/{{ $post->id }}"; // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier =
                                    "{{ $post->id }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };

                            (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document,
                                    s = d.createElement('script');
                                s.src = 'https://https-intense-hamlet-17769-herokuapp-com.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();

                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                                powered by Disqus.</a></noscript>

                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container site-wrap">

            <div class="row mr-0 pt-8">
                <div class="col-md-8 col-xl-9">
                    {!! $post->content !!}
                    <div class="pt-5">
                        <p>Categories: <a href="#">{{ $post->category->name }}</a> Tags:
                            @foreach ($post->tags as $tag)
                                <a class="badge badge-pill" href="{{ route('blog.tag', $tag->id) }}">{{ $tag->name }}
                                </a>
                            @endforeach
                        </p>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
            <hr>
                        <div id="disqus_thread"></div>
                        <script>
                            var disqus_config = function() {
                                this.page.url =
                                    "{{ config('app.url') }}/blog/posts/{{ $post->id }}"; // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier =
                                    "{{ $post->id }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };

                            (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document,
                                    s = d.createElement('script');
                                s.src = 'https://https-intense-hamlet-17769-herokuapp-com.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();

                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                                powered by Disqus.</a></noscript>
        </div>
        <div class="container site-wrap bg-dark">
            <div class="site-wrap">
                @include('layouts.footer')
            </div>
        </div>

    @endsection



</body>

</html>
