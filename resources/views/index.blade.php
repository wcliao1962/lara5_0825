@extends('postsLayouts.master')

@section('title', 'Clean Blog')



@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{asset('img/home-bg.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach($posts as $post)
                    <!-- Post title -->
                    <div class="post-title">
                        <h2>
                            <a href="{{route('post.show', $post->id)}}">
                                {{$post->title}}
                            </a>
                        </h2>

                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> {{$post->created_at}}</p>
                    </div>
                    <hr>
                @endforeach
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

