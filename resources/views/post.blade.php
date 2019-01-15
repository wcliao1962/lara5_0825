@extends('postsLayouts.master')

@section('title', 'Clean Blog - Sample Post')



@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{asset('img/post-bg.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <!-- Post title -->
                    <div class="post-title">
                        <h2>
                            {{$post->title}}
                        </h2>

                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> {{$post->created_at}}</p>
                    </div>
                    <!-- Post content -->
                    <div class="post-content">
                        {{$post->content}}
                    </div>
                    <hr>

                    <!-- Post Comments -->
                    @foreach($post->comments as $comment)
                        ***************
                        {{$comment->content}}
                        <br>
                    @endforeach
                    <hr>
                    <div class="row" style="padding:20px 0;">
                        <div class="col-md-10 col-md-offset-1">
                            <h3>
                                發表回應
                            </h3>
                            <form method="POST" action="{{ route('post.comment.store',['post'=>$post->id]) }}">
                                {{ csrf_field() }}
                                <label for="content">回應</label>
                                <div class="form-group">
                                    <textarea name="content" class="form-control" rows="5" style="resize:vertical;"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">發表</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </article>


@endsection