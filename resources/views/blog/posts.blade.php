@extends('layout.default')

@section('title', 'Posts list')

@section('content')
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/blog/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>All our posts</h1>
                    <span class="subheading">List of posts</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            @foreach ($posts as $post)
            <div class="post-preview">
                <a href="{{ route('post', $post)}}">
                    <h2 class="post-title">{{ $post->title }}</h2>
                    <h3 class="post-subtitle">{{ $post->description }}</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="{{ route('user', $post->author->user ) }}">{{ $post->author->user->name }}</a>
                    on {{ $post->created_at }}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            @endforeach
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
    </div>
</div>
@endsection